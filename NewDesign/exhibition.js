/// <reference path="../typings/globals/jquery/index.d.ts" />


var exhibitionCard = $("#exhibition-card-template").html();
var exhibitionTemplateCard = Handlebars.compile(exhibitionCard);

var exhibitions = [
    {
        name: "exhibition1",
        date: "2021/6/15 - 25",
        imageUrl: "./imgs/4171c15d72a646ab91b75936b46bc799.jpeg",
        location: "Museum of weapon, Malaysia",

    },
    {
        name: "exhibition2",
        date: "2021/6/15 - 25",
        imageUrl: "./imgs/4171c15d72a646ab91b75936b46bc799.jpeg",
        location: "Museum of weapon, Malaysia",
        
    },
    {
        name: "exhibition3",
        date: "2021/6/15 - 25",
        imageUrl: "./imgs/4171c15d72a646ab91b75936b46bc799.jpeg",
        location: "Museum of weapon, Malaysia",
        
    },
    {
        name: "exhibition4",
        date: "2021/6/15 - 25",
        imageUrl: "./imgs/4171c15d72a646ab91b75936b46bc799.jpeg",
        location: "Museum of weapon, Malaysia",
        
    },
]

var exhibitionsCardData = exhibitionTemplateCard({
    exhibitions
});

$("#exhibition-list").html(exhibitionsCardData);
