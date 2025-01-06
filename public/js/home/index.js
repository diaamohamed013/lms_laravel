(function ()
{
    let addDarkClassToHtml2 = function() {
        // localStorage.removeItem("style");
        if (localStorage.getItem("style") === null) {
            document.documentElement.classList.remove("dark");
        } else {
            document.documentElement.classList.add(localStorage.getItem("style"));
        }
    };
    addDarkClassToHtml2()


    APP_URL = window.location.origin;
    ASSET_URL = "/home"

    function progressBar() {
        let navProgChild = document.querySelector(".navProgChild");
        navProgChild.style.width = `${(window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100}%`;
    }
    window.addEventListener("scroll", progressBar)

}());


const darkModeSwitch = document.querySelector('.theme-switch__checkbox');

let addStyleToLocaleStorage2 = function() {
    if (!localStorage.getItem("style")) {
        localStorage.setItem("style", "dark");
    } else {
        localStorage.removeItem("style");
    }
};

darkModeSwitch.addEventListener('change', () => {
    if (darkModeSwitch.checked) {
        document.documentElement.classList.add('dark');
    } else {
        console.log("in");
        document.documentElement.classList.remove('dark');
    }
    addStyleToLocaleStorage2();
});
darkModeSwitch.checked = localStorage.getItem("style") === "dark";



var pluginConfig = {
    envType: "test",
    hashKey: "7fbfbfe01dce4c0eee295ccf2fbc29242c2c68a10d570389dcf9d30035f9b463",
    style:{
        listing:"horizontal"
    },
    version:"0",
    requestBody: {
        "cartTotal": "50",
        "currency": "EGP",
        "customer": {
            "first_name": "test",
            "last_name": "fawaterk",
            "email": "test@fawaterk.com",
            "phone": "0123456789",
            "address": "test address"
        },
        "redirectionUrls": {
            "successUrl": "https://dev.fawaterk.com/success",
            "failUrl": "https://dev.fawaterk.com/fail",
            "pendingUrl": "https://dev.fawaterk.com/pending"
        },
        "cartItems": [{
            "name": "this is test oop 112252",
            "price": "25",
            "quantity": "1"
        },
            {
                "name": "this is test oop 112252",
                "price": "25",
                "quantity": "1"
            }
        ],
        "payLoad": {
            "custom_field1":"xyz",
            "custom_field2":"xyz2"
        }
    }
};

$('a#test').on('click',function (){
    fawaterkCheckout(pluginConfig);
})
