/// <reference path="./typings/globals/jquery/index.d.ts" />
var weaponCard = $("#weapon-card-template").html();
var weaponPage = $("#weapon-page-template").html();
// var weaponPopUp = $("#weapon-pop-up-template").html();
//come here to walk around

var templateCard = Handlebars.compile(weaponCard);
var templatePage = Handlebars.compile(weaponPage);


// var templatePopUp = Handlebars.compile(weaponPopUp);


var weapons = [
    {
        name: "Black Sword",
        imageUrl: "./imgs/weaponSample.jpg",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
    },

    {
        name: "Silver Qiang",
        imageUrl: "./imgs/Qiang.jpg",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
    },

    {
        name: "Silver Dao",
        imageUrl: "./imgs/53a7f5bc8eef5133b63af57f3558169c.jpg",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
    },

    {
        name: "Silver Dao",
        imageUrl: "./imgs/53a7f5bc8eef5133b63af57f3558169c.jpg",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
    },
    {
        name: "Silver Dao",
        imageUrl: "./imgs/53a7f5bc8eef5133b63af57f3558169c.jpg",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
    },
    {
        name: "Silver Dao",
        imageUrl: "./imgs/53a7f5bc8eef5133b63af57f3558169c.jpg",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
    },
    
];

var tempWeaponPage;

function PageCalculator() {
    
}

var weaponsCardData = templateCard({
    weapons
});

//0->7
//8->15

$("#weapon-list").html(weaponsCardData);


// var weaponsPopUpData;
// function ClosePopUp() {
//     $(".pop-up").css("display", "none");
// }

// function OpenPopUp(name) {
//     weapons.forEach(element => {
//         if(element.name == name)
//         {
//             weaponsPopUpData = templatePopUp({
//                 name: element.name,
//                 imageUrl: element.imageUrl,
//                 description: element.description
//             });
//             //TODO: Scroll height bug
//             $("#weapon-pop-up").html(weaponsPopUpData);
//         }
//     });
//     $(".pop-up").css("display", "flex");
// }



        

        


        
