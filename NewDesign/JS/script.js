/// <reference path="../../typings/globals/jquery/index.d.ts" />

Handlebars.registerHelper('lesserThan', function (v1, v2, options) {
    'use strict';
    if (v1<v2) {
        return options.fn(this);
    }
    return options.inverse(this);
    });

var weaponCard = $("#weapon-card-template").html();
var templateCard = Handlebars.compile(weaponCard);




var weapons = [
    {
        name: "Green Dragon Crescent-Moon Sabre",
        weaponType: "Sabre",
        weilder: "Guan Yu",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/TheGreenDragonCrescentMoonSabre.jfif",
        description: "The Green Dragon Crescent-Moon Sabre is one of the Yanyue Swords. According to documentary records and unearthed cultural relics, the Yanyue Swords began to appear in the Song Dynasty. Due to its weight, it was mainly used to practice arm strength, not as a weapon in actual combat. The Green Dragon Crescent-Moon Sabre is a weapon used by Guan Yu. The book describes the Green Dragon Crescent-Moon Sabre weighing 82 kilograms, also known as the Leng Yan Saw. Guan Yu used it to kill many generals, so later generations also called the Green Dragon Crescent-Moon Sabre as the Guan Dao.",
    },

    {
        name: "Zhang Ba Serpent-headed Spear",
        weaponType: "Spear",
        weilder: "Zhang Fei",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/ZhangBaSerpentHeadedSpear.jpg",
        description: "Zhang Ba Serpent-headed Spear, the name of an ancient weapon. Also known as Zhang eight-point steel spear. It is all made of iron point steel. The spear is one foot long and the spear tip is eight inches long. The blade has double fronts, and it is shaped like a snake, hence the name. The Zhangba Snake Lance is comparable to the Qinglong Yanyue Dao, and it is famous all over the world. This zhangba snake spear, the tip of the spear is like a white snake, and the body of the spear weighing more than fifty kilograms, sweeps the battlefield in the black brocade, picks the enemy through armor, and shoots at the enemy, and there is one. The enemy general was stabbed to death under the eight snake spear, which is a symbol of the fear of the enemy general.",
    },

    {
        name: "Bronze Sword",
        weaponType: "Sword",
        weilder: "Cao Cao",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/BronzeSword.jfif",
        description: "The Bronze Sword, a weapon that is as famous as the Reliant Sword. It cuts iron like mud and is extremely sharp. It is one of the two swords owned by Cao Cao, with the word ‘Qing Yan’ inlaid in gold on the hilt. The sword was always matched by Xiahouen. Later, Xiahouen was stabbed to death by Zhao Yun and belonged to Zhao Yun. He fell into the land of no one among Cao Cao’s thousands of horses. He cut down both sides of the banner, seized three swords, and stabbed and killed. More than 50 famous generals in Cao Ying died and became famous in the first battle.",
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




