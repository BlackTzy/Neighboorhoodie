var addItemId = 0;
function addToCart(txt1){
  addItemId += 1;
  var selectedItem = document.createElement('div');
  selectedItem.classList.add('carting');
  selectedItem.setAttribute('id',addItemId);
var img=document.createElement('images');
img.setAttribute('src',item.Children[0].currentSrc);
var cartItems = document.getElementById('title');
selectedItem.append('img');
cartItems.append(selectedItem);
}
