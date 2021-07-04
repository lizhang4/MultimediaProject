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
        name: "The day the picture Halberd",
        weaponType: "Halberd",
        weilder: "Lu Bu",
        date: "1600 - 476 BC",
        imageUrl: "./imgs/TheDayThePictureHalberd.jpeg",
        description: "It is said that Cheng Ying was a long sword without a blade. Strangely enough, it projected a shadow upon the wall in the dawn or the evening, when an alternation between daylight and darkness occurred. This was the very sword appreciated by Lie Zi, as was recorded in theWorks of Lie Zi. It was made in the Shang Dynasty (about 1600-1100 BC) and later owned by Kong Zhou, a man from the State of Wei during the Spring and Autumn (770-476 BC). Cheng Ying was a sword of delicate elegance.",
    },

    {
        name: "Yu Chang",
        weaponType: "Sword",
        weilder: "Zhuan Zhu",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/swords/YuChang.jpg",
        description: "Yu Chang was a sword of bravery. According to theHistory of Assassins, a chapter of theRecords of the Grand Historian, also known in English by the Chinese nameShiji, when King Liao of the State of Wu, was enjoying some food served by Zhuan Zhu, a cook dispatched to assassinate the king. Hardly had he heard an eagle flying down to him when a sword came out from the fish he was going to eat. With the sword, Zhuan Zhu wasted no time in pointing it at King Liao. Although Liao’s well-trained guards protected him with weapons, the sword still successfully reached him and stabbed into his heart. Therefore, Yu Chang",
    },

    {
        name: "Gan Jiang and Mo Ye",
        weaponType: "Sword",
        weilder: "Gan Jiang",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/swords/GanJiangMoYe.jpg",
        description: "Gan Jiang was the sword of a husband named Gan Jiang; Mo Ye was the sword of his wife, named Mo Ye. Like the inseparable couple, the two swords, one male and the other female, were not able to be separated. The husband, Gan Jiang, a blacksmith, was given a request to make a sword for the king. As the time of delivery drew near, Gan Jiang got more worried, for his fire was still not hot enough to forge the metal, and he feared he could not make the sword in time. Having understood the reason for her husband’s distress, the wife shed tears and knew that her husband would be executed if he could not deliver the sword on schedule. She decided to save her husband by throwing herself into the fire, thereby heating it enough to make the sword. When the husband got to know what she intended to do, he could not stop her, only to hear the wife saying, “we can meet again.” After her wife’s death, the husband Gang Jiang finally made two swords. He named the two swords Gan Jiang and Mo Ye. Putting the sword Mo Ye aside for him, he gave the sword Gan Jiang to the king. The news that Gan Jiang left the other sword for his own use got to the ears of the king, who was outraged and decided to execute him. “How can we unite?” asked Gan Jiang as he was being arrested. All of a sudden, the Mo Ye sword turned into a beautiful dragon. Afterwards, the Gan Jiang sword possessed by the king also disappeared.Six hundred years later, in a remote small town, the sword saw the dragon in the lake and immediately turned into a dragon—and they united again! The next day, the people in the town saw a new couple settle there. The husband was an excellent blacksmith, who only made agricultural instruments for people while steadfastly refusing to anyone, whether or not they asked, to make valuable swords. When he was at work, his wife would cool him with a fan and wipe sweat from his body. Therefore, Gan Jiang and Mo Ye were two swords of love.",
    },

    {
        name: "Qi Xing Long Yuan",
        weaponType: "Sword",
        weilder: "Bob",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/swords/QiXingLongYuan.jpg",
        description: "Legend has it that this sword was the joint work of two sword makers, Ou Yezi and Gan Jiang. In order to make it, they brought stream water from Cishan Mountain to the seven ponds around the sword-making fireplace. Because the seven ponds were shaped like the seven stars of the Big Dipper, the sword was named Qi Xing (seven stars). If you look down the sword, it looks ethereal and profound, as if you are in a high position overlooking a valley where a huge dragon lives, which is why the sword was also named Long Yuan (an abyss with a dragon).According to theAnnals of Wu and Yue, another factor that made this sword famous was a fisherman whose name is unknown. He saved Wu Zixu’s life. In order to express his gratitude to the fisherman, who refused to tell his name, Wu sent him the sword, Qi Xing Long Yuan. The fisherman sighed and said, “I saved your life because you are a loyal official of the country, not because I wanted your reward. Now that you think I am a man longing for profits, I have to show my nobleness with this sword.” With these words, he committed suicide with the sword. Therefore, Qi Xing Long Yuan was a sword of integrity.",
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




