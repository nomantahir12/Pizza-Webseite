let cartString = localStorage.getItem("cart");
    console.log(cartString);
    //converting string to object using json.parse
    let cart = JSON.parse(cartString);
    console.log(cart);
    if (cart == null || cart.length == 0) {
      console.log("cart is empty");
      let cartItems = document.getElementById("cart-items");

      cartItems.innerHTML = "( 0 )";

      let cartBody = document.getElementsByClassName("cart-body")[0];
      console.log(cartBody+   "Leer");
      cartBody.innerHTML = "<h3> Warenkorb ist leer. </h3>";
      let cartBtn = document.getElementById("id-kasse");
      // alert (cartBtn);
      cartBtn.classList.add("disabled");
      console.log("HEllo");
    } else {
      //there is something to show in the cart
      console.log(cart);
      let cartItems = document.getElementById("cart-items");
      cartItems.innerHTML = "(" + cart.length + ")";
      let table = `
        <table class="table" style="font-size:12px">
        <thead class="thread-light">
            <tr>
                <th style="padding: 10px 1px 12px">Item Name</th>
                <th style="padding: 10px 1px 12px">Price</th>
                <th style="padding: 10px 1px 12px">Quantity</th>
                <th style="padding: 10px 1px 12px">Total Price</th>
                <th style="padding: 10px 1px 12px">Action</th>
                
            </tr>
        </thead>
            
                    `;
      let totalPrice = 0;
      let newPrice = 0;
      // parseFloat(item.productPrice.replace(",", "."))).toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 })
      cart.map((item) => {
        let totalPP = item.productQuantity * item.productPrice
        let StringTotalPP = (totalPP.toFixed(2)).toString().replace(".", ",")
        table += `
                        <tr>
                          <td style="padding: 10px 1px 12px"> ${item.productName} </td>
                          <td style="padding: 10px 1px 12px"> ${(item.productPrice.toFixed(2)).toString().replace(".", ",")}€ </td>
                          <td style="padding: 10px 1px 12px"> ${item.productQuantity} </td>
                          <td style="padding: 10px 1px 12px">${(StringTotalPP)}€</td>
                          
                          <td style="padding: 10px 1px 12px"> <button onclick=" deleteItemFromCart(${item.productId})" class="btn btn-danger btn-delete"> Löchen </Button></td>
                        </tr>`

        totalPrice += item.productPrice * item.productQuantity;
        newPrice = (totalPrice.toFixed(2)).toString().replace(".", ",");
        console.log(newPrice);

      })


      table = table + `
                      <tr> <td colspan="5" class="text-right font-weight-bold"> Gesamt Preis :  ${newPrice}€</td> </tr>
                      </table>`;

                      
      let cartBody = document.getElementsByClassName("cart-body")[0];
      console.log(cartBody);
      cartBody.innerHTML = table;
    }