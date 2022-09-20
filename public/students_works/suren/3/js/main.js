// smartphones section
let phones = {
    huawei: {
        'name': "Huawei",
        'price': 380,
        'link': url+url+"/media/img/Huawei.jpg"
    },
    iphone: {
        'name': "iPhone",
        'price': 930,
        'link': url+"/media/img/iphone.png"
    },
    oppo: {
        'name': "Oppo",
        'price': 340,
        'link': url+"/media/img/oppo.jpg"
    },
    samsung: {
        'name': "Samsung",
        'price': 700,
        'link': url+"/media/img/samsung-galaxy-s10.jpg"
    },
    xiaomi: {
        'name': "Xiaomi",
        'price': 370,
        'link': url+"/media/img/xiaomi.jpg"
    }
};
for (let key in phones) {
    let _div = document.createElement("div");
    _div.className = "col-xl-2 border m-2 products";
    document.getElementById("smartphones").appendChild(_div);
    let _img = document.createElement("img");
    _img.src = phones[key].link;
    _img.className = "product img-fluid";
    _div.appendChild(_img);
    let _but = document.createElement("button");
    _but.innerText = phones[key].name + " $" + phones[key].price;
    _but.className = "addcart";
    _but.style.marginTop = 20 + "px";
    _but.style.width = 150 + "px";
    _but.style.height = 40 + "px";
    _but.style.backgroundColor = "lightblue";
    _but.style.border = "none";
    _but.style.cursor = "pointer";
    _div.appendChild(_but);
}

// tablets section
let tablets = {
    huawei_tab: {
        'name': "Huawei Tab",
        'price': 1120,
        'link': url+"/media/img/huaweitab.jpg"
    },
    iphone_tab: {
        'name': "iPad",
        'price': 1690,
        'link': url+"/media/img/ipad.jpeg"
    },
    hp_tab: {
        'name': "HP Tab",
        'price': 1720,
        'link': url+"/media/img/ARM-Tablets-2020.jpg"
    },
    win_tab: {
        'name': "Win Tab",
        'price': 1650,
        'link': url+"/media/img/Lumia-2520-min.jpg"
    },
};
for (let key in tablets) {
    let _div = document.createElement("div");
    _div.className = "col-xl-5 border products m-2";
    document.getElementById("tablets").appendChild(_div);
    let _img = document.createElement("img");
    _img.src = tablets[key].link;
    _img.className = "product img-fluid";
    _div.appendChild(_img);
    let _but = document.createElement("button");
    _but.innerText = tablets[key].name + " $" + tablets[key].price;
    _but.className = "addcart";
    _but.style.marginTop = 20 + "px";
    _but.style.width = 150 + "px";
    _but.style.height = 40 + "px";
    _but.style.backgroundColor = "lightblue";
    _but.style.border = "none";
    _but.style.cursor = "pointer";
    _div.appendChild(_but);
}

// notebooks section
let notebooks = {
    hp: {
        'name': "HP Probook",
        'price': 2490,
        'link': url+"/media/img/dims.jpg"
    },
    apple: {
        'name': "MacBook",
        'price': 3190,
        'link': url+"/media/img/01-macbook-air-2019.jpg"
    },
    sony: {
        'name': "Sony Vaio",
        'price': 1890,
        'link': url+"/media/img/sonyz-laptopcubinhduon.jpg"
    },
    acer: {
        'name': "Acer Predator",
        'price': 7490,
        'link': url+"/media/img/acer-predator-21-x-01.jpg"
    },
};
for (let key in notebooks) {
    let _div = document.createElement("div");
    _div.className = "col-xl-5 border products m-2";
    document.getElementById("notebooks").appendChild(_div);
    let _img = document.createElement("img");
    _img.src = notebooks[key].link;
    _img.className = "product img-fluid";
    _div.appendChild(_img);
    let _but = document.createElement("button");
    _but.innerText = notebooks[key].name + " $" + notebooks[key].price;
    _but.className = "addcart";
    _but.style.marginTop = 20 + "px";
    _but.style.width = 150 + "px";
    _but.style.height = 40 + "px";
    _but.style.backgroundColor = "lightblue";
    _but.style.border = "none";
    _but.style.cursor = "pointer";
    _div.appendChild(_but);
}