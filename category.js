/// <reference path="./typings/globals/jquery/index.d.ts" />
var weaponCard = $("#weapon-card-template").html();
var weaponPopUp = $("#weapon-pop-up-template").html();


        var templateCard = Handlebars.compile(weaponCard);
        var templatePopUp = Handlebars.compile(weaponPopUp);


        // weaponsData = [
        //     {
        //         name: "sword",
        //         description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur",
        //     }
        // ]

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
            {
                name: "Silver Dao",
                imageUrl: "./imgs/53a7f5bc8eef5133b63af57f3558169c.jpg",
                description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates nihil velit consequatur enim ab dolores ea",
            },
            
        ]

        var weaponsCardData = templateCard({
            weapons
        });

        var weaponsPopUpData;


        $("#weapon-list").html(weaponsCardData);
        
        
        function ClosePopUp() {
            $(".pop-up").css("display", "none");
        }

        function OpenPopUp(name) {
            weapons.forEach(element => {
                if(element.name == name)
                {
                    weaponsPopUpData = templatePopUp({
                        name: element.name,
                        imageUrl: element.imageUrl,
                        description: element.description
                    });
                    //TODO: Scroll height bug
                    $("#weapon-pop-up").html(weaponsPopUpData);
                }
            });
            $(".pop-up").css("display", "flex");
        }


        var hello = document.getElementById("hello");

        var content = `<div> context 1 ${weapons[1].name} </div>`;


        hello.innerHTML = content;

        

        


        