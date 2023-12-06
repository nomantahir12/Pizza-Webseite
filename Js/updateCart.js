let cartString = localStorage.getItem("cart");
    console.log(cartString);
    //converting string to object using json.parse
    let cart = JSON.parse(cartString); 
    console.log(cart);
    if(cart == null || cart.length == 0)
    {
        console.log ("cart is empty");
        let cartItems = document.getElementById("cart-items");
        
        cartItems.innerHTML = "( 0 )";  
        
        // let cartBody = document.getElementsByClassName("cart-body")[0];
        // cartBody.innerHTML = "<h3> Warenkorb ist leer. </h3>";
        
        
    }else 
    {
        //there is something to show in the cart
        console.log (cart);
        let cartItems = document.getElementById("cart-items");
        cartItems.innerHTML = "(" + cart.length + ")"; 
    }

    // ------------------2te-----------------

    



 



    