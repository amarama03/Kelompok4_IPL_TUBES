
document.addEventListener('alpine:init', () => {
    Alpine.data('products', () => ({
        items : [
            { id: 1, name: 'Cappuccino', img: 'cocoa.png', price:20000},
            { id: 2, name: 'Americano', img: 'Americanoo.png', price:20000},
            { id: 3, name: 'cocoa', img: 'cocoa.png', price:20000},
            { id: 4, name: 'tea', img: 'tea.png', price:25000},
            { id: 5, name: 'Latte', img: 'coffee.png', price:40000},
        ],
    }));

Alpine.store('cart', {
    items: [],
    total:0,
    quantity:0,
    add(newItem) {
        //cek apakah ada barang yang sama
        const cartItem = this.items.find((item) => item.id === newItem.id);
        
        //Jika belum ada / masih kosong
        if(!cartItem){
            this.items.push({ ...newItem, quantity: 1, total: newItem.price});
            this.quantity++;
            this.total += newItem.price;
        } else {
            // Jika item sudah ada, cek apakah barang beda atau sama dengan yang ada di cart
                    this.item = this.items.map((item) => {
                        // Jika barang beda
                        if (item.id !== newItem.id) {
                            return item;
                        } else {
                            //Jika barang sudah ada, tambah quantity dan totalnya
                            item.quantity++;
                            item.total = item.price * item.quantity;
                            this.quantity++;
                            this.total += item.price;
                            return item;
                        }
                    });
                }
            },
            remove(id) {
                //ambil item yang mau diremove berdasarkan id
                const cartItem = this.items.find((item) => item.id === id);

                //Jika item lebih dari 1
                if(cartItem.quantity > 1) {
                    //telusuri 1 1
                    this.items = this.items.map((item) => {
                        //Jika bukan barang yang di klik
                        if(item.id !== id) {
                            return item;
                        } else {
                        item.quantity--;
                        item.total = item.price * item.quantity;
                        this.quantity--;
                        this.total-= item.price;
                        return item;
                        }
                    });
                } else if (cartItem.quantity === 1) {
                    //Jika barangnya sisa 1
                    this.items = this.items.filter((item) => item.id !== id);
                    this.quantity--;
                    this.total -= cartItem.price;
                }
            }
        });
});

const rupiah = (number) => {
    return new Intl.NumberFormat('id-ID',{
        style: 'currency',
        currency: 'IDR',
        //minimumFractionDigits: 0,
        }).format(number);
};

function openCustomModal() {
    // Your existing code to open the modal
    var modal = document.getElementById('customModal');
    modal.style.display = 'block';
  
    // Optionally, you can populate the modal content here
    var modalContent = document.getElementById('modalContent');
    modalContent.innerHTML = 'Custom content for the modal.';
  }
  
  function closeCustomModal() {
    var modal = document.getElementById('customModal');
    if (modal) {
        modal.style.display = 'none';
    }
}
