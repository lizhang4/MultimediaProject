/// <reference path="../typings/globals/jquery/index.d.ts" />


var weaponCard = $("#weapon-card-template").html();
var templateCard = Handlebars.compile(weaponCard);


var weapons = [
    {
        name: "Black Sword",
        weaponType: "Sword",
        weilder: "Guan Yu",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DaoCoverEdited.png",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
    },

    {
        name: "Silver Qiang",
        weaponType: "Spear",
        weilder: "Ah boy",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DaoCoverEdited.png",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
    },

    {
        name: "Silver Dao",
        weaponType: "Dao",
        weilder: "John",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DaoCoverEdited.png",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
    },

    {
        name: "Silver Dao",
        weaponType: "Dao",
        weilder: "Bob",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DaoCoverEdited.png",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
    },

    {
        name: "Silver Dao",
        weaponType: "Axe",
        weilder: "Bob",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DaoCoverEdited.png",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
    },

    {
        name: "Silver Dao",
        weaponType: "Others",
        weilder: "Bob",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DaoCoverEdited.png",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
    },

    {
        name: "Silver Dao",
        weaponType: "Others",
        weilder: "Bob",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DaoCoverEdited.png",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
    },

    {
        name: "Silver Dao",
        weaponType: "Others",
        weilder: "Bob",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DaoCoverEdited.png",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
    },
    
]

var weaponsCardData = templateCard({
    weapons
});


$("#weapon-list").html(weaponsCardData);



