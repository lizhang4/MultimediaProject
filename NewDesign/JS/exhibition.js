/// <reference path="../../typings/globals/jquery/index.d.ts" />


var exhibitionCard = $("#exhibition-card-template").html();
var exhibitionTemplateCard = Handlebars.compile(exhibitionCard);

var exhibitions = [
    {
        name: "Grand Exhibition Of Ancient Arms & Armours",
        date: "2021/7/15 - 2021/7/25",
        imageUrl: "./imgs/Exhibition1.jfif",
        location: "Museum of weapon, Malaysia",
        price: "Paid",
        description: "Ancient weapons can be divided into cold weapons and fire weapons. The original purpose of cold weapons is cold and ruthless beauty, which cannot be replaced by other crafts. The complete structure of a sword, accurate control of power points, and delicate and ingenious carving decorations And so on, are the highest crystallization of the wisdom of the ancients, and also another aspect of aesthetic expression. This exhibition lays out the contents of the display on a timeline, compares the production technology of weapons in different periods, from the wood and stone weapon period to the introduction of modern art swords, etc., emphasizes the beauty of weapons through objects, shows the perfect composition of weapons in structural form, and experiences traditional culture.",
        ongoing: "Ongoing",

    },
    {
        name: "Exhibition of Ancient Chinese Cold Weapons",
        date: "2021/6/27 - 2021/7/17",
        imageUrl: "./imgs/Exibition2.jpeg",
        location: "Museum of weapon, Malaysia",
        price: "Free",
        description: 'This exhibition will exhibit 187 ancient weapons from more than 30 collectors across the country, dating from the Shang and Zhou Dynasties to modern times. The materials include bronze and iron. The types cover ritual weapons and actual combat weapons. It fully demonstrates the development of ancient Chinese cold weapons. process.In chronological order, the exhibition is divided into five units: "Golden Bronze Radiance", "Hundreds of Refining", "Golden Ge and Iron Horse", "Strengthening the Strength", and "Frost Blade Afterglow", each focusing on China The craftsmanship, decorative features, use methods and specific functions of cold weapons in different eras.From the Xia, Shang and Zhou Dynasties to the Warring States Period, weapons were mostly made of bronze, and bronze weapons with regional and cultural characteristics such as "Zheng Zhidao", "Song Zhijin", "Lu Zhizhi" and "Wuyue Sword" appeared; the earliest in China Iron weapons appeared in the early Spring and Autumn Period, Qin and Han iron weapons replaced bronze weapons, and the smelting, forging and heat treatment technology developed further in the Wei, Jin, Southern and Northern Dynasties.',
        ongoing: "Ongoing",

        
    },
    {
        name: "Exhibition of Sabre And Sword 2",
        date: "2021/1/3 - 2021/1/30",
        imageUrl: "./imgs/Exhibition3.jpg",
        location: "Museum of weapon, Malaysia",
        price: "Free",
        description: 'The knife is one of the oldest tools of mankind. For humans without carapace, claws and sharp beaks, the knife is their most important helper in order to survive in the jungle world where the weak and the strong. The acquisition of food, the manufacture of utensils, and the maintenance of life are all inseparable from the knife. In this sense, it can be said that human civilization has developed from the blade. However, it was civilization that changed the nature of the knife. With the advent of metal knives, the role of knives began to give way from the dominant position of tools to the dominant position of weapons, becoming a weapon for fighting and fighting among humans. Since then, the sword has been linked to the prosperity and decline of a nation, which is particularly typical in the history of Chinese civilization. Fortunately, while the Chinese have developed world-renowned sword technology and art, they have also used various knives to create a rich and colorful culture and life. Just as we evaluate the sea, whether it is praise or curse, we have to admit that the knife is one of the greatest inventions of mankind.',
        ongoing: "Past",
        
    },
    {
        name: "Exhibition of Sabre And Sword",
        date: "2020/9/14 - 2020/10/4",
        imageUrl: "./imgs/Exhibition4.jfif",
        location: "Museum of weapon, Malaysia",
        price: "Free",
        description: 'This exhibition will exhibit 187 ancient weapons from more than 30 collectors across the country, dating from the Shang and Zhou Dynasties to modern times. The materials include bronze and iron. The types cover ritual weapons and actual combat weapons. It fully demonstrates the development of ancient Chinese cold weapons. process.In chronological order, the exhibition is divided into five units: "Golden Bronze Radiance", "Hundreds of Refining", "Golden Ge and Iron Horse", "Strengthening the Strength", and "Frost Blade Afterglow", each focusing on China The craftsmanship, decorative features, use methods and specific functions of cold weapons in different eras.From the Xia, Shang and Zhou Dynasties to the Warring States Period, weapons were mostly made of bronze, and bronze weapons with regional and cultural characteristics such as "Zheng Zhidao", "Song Zhijin", "Lu Zhizhi" and "Wuyue Sword" appeared; the earliest in China Iron weapons appeared in the early Spring and Autumn Period, Qin and Han iron weapons replaced bronze weapons, and the smelting, forging and heat treatment technology developed further in the Wei, Jin, Southern and Northern Dynasties.',
        ongoing: "Past",
        
    },
]

var exhibitionsCardData = exhibitionTemplateCard({
    exhibitions
});

$("#exhibition-list").html(exhibitionsCardData);
