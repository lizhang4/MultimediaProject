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
        name: "Iron Tyre Bow",
        weaponType: "Bow",
        weilder: "Huang Zhong",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/HuangZhong.jpg",
        description: "This bow is owned by Huang Zhong, a member of five tiger general. The bow is one of the indispensable cold weapons for large-scale wars. Most of them are worn by brave generals who are stronger than others, and the weight is about 200.",
    },

    {
        name: "Seven Star Sword",
        weaponType: "Sword",
        weilder: "Cao Cao",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/SevenStarSword.png",
        description: "This sword appears in the forth chapter of “romance of the three kingdoms”. It was originally owned by Situ Wang Yun. When Cao Cao assassinated Dong Zhuo, he borrowed a sword from Wang Yun to assassinate him. After the assassination failed, Cao Cao dedicated the sword to Dong Zhuo. After Dong Zhuo was killed by Wang Yun, this sword returned to Wang Yun's hand. Soon, Dong Zhuo's army team attacked Li Chang into Chang'an. Wang Yun was killed in the fight, the sword fallen into Li Chang's hand. Later, Li Chang was killed by Cao Cao's troops. At last, this sword fell into the hands of Cao Cao.",
    },

    {
        name: "Sword Of Heaven",
        weaponType: "Sword",
        weilder: "Cao Cao",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/YiTianJian.png",
        description: 'This sword appears in the forty-one chapter of “romance of the three kingdoms”. This sword was originally owned by Cao Cao. It is said to be extremely sharp, cutting iron like mud. Cao Cao used the sword to kill Lu Boshe’s family by mistake, and sigh “I would rather take the world, and stop teaching the world to take me”. The Sword of Heaven and Qing Gang Sword were collectively called "Peerless Double Swords", both of which were owned by Cao Cao. Cao Cao used the sword of heaven to suppress his might and the Qing Gang Sword to kill. Cao Cao always bring this sword with him to manifest his status.'
    },

    {
        name: "The Twins Sword",
        weaponType: "Sword",
        weilder: "Liu Bei",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/TheTwinsSword.png",
        description: 'This sword is owned by Liu Bei. The male sword is three feet and seven inches long while the female sword is three feet and three inches. The twins sword is protected by the yellow dragon and phoenix. These two divine beasts are too bloodthirsty and extremely hostile. If there is no battle to fight, they must be sacrificed with human blood. If the sword owner considers the loyalty and benevolence mentioned above, he can be filled with compassion. The tears of anger are replaced, thereby dissolving the hostility of the two gods. Rumor has it that there is an invincible secret hidden in the twin sword.',
    },

    {
        name: "Tiger Head Cham Golden spear",
        weaponType: "Spear",
        weilder: "Ma Chao",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/MaChao.png",
        description: "This spear is owned by Ma Chao, a member of five tiger general. The spear body is made of cold iron, measuring one foot and three inches in length. The head of the spear is in the shape of a black gold tiger head. It swallows the blade with a tiger's mouth. The spear body is gilded and made of platinum.",
    },

    {
        name: "Double-Iron Halberd",
        weaponType: "Halberd",
        weilder: "Dian Wei",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DianWei.png",
        description: "This halberd is owned by Dian Wei. The left hand halberd weighs 39 kilograms, and the right hand halberd weighs 41 kilograms. It is only made of ordinary iron, but in Dianwei’s hands, it is like flying and charging into battle. At last, Dian Wei lost and die in a fight because his halberd has been stolen by others in a midnight.",
    },

    {
        name: "Bright Silver Spear",
        weaponType: "Spear",
        weilder: "Zhao Yun",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/ZhaoYun.png",
        description: "This spear is owned by Zhao Yun, a member of five tiger general. With the qing gang sword in the left hand, the bright silver spear in the right hand, the white dragon horse, the white helmet, white armor, is the savior of Changbanpo riding alone, smashed back and forth among the millions of Cao’s army, whom is the fierce general, Changshan, Zhao Yun, also named as Zhao Zilong! This is how the novel “romance of three kingdoms” describe the spear and Zhao Yun. This spear also named as Gentian Silver Spear. It is recorded in the wild history that this spear was passed down from the family, and he was given to him after his brother died. In addition, during the Battle of Changbanpo, Zhao Yun killed Cao Cao's attendant Xiahouen and obtained Cao Cao's sword (qing gang sword) from Xiahouen. Zhao Yun used his own spear (bright silver spear) and the snatched sword (qing gang sword) to break out of the siege and returned to Liu Bei's side. Since then, Zhao Yun has been using the Bright Silver Spear and the Qing Gang Sword as his weapons.",
    },

    {
        name: "Long-Handle Blade",
        weaponType: "Blade",
        weilder: "Cao Hong",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DianWei.png",
        description: "A long-handle knife is a common weapon in three kingdoms. It is a long weapon. It is actually a knife with long-handle. The famous general that use long-handle knife is Cao Hong.",
    },

    {
        name: "Double-Iron Halberd",
        weaponType: "Halberd",
        weilder: "Dian Wei",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DianWei.png",
        description: "This halberd is owned by Dian Wei. The left hand halberd weighs 39 kilograms, and the right hand halberd weighs 41 kilograms. It is only made of ordinary iron, but in Dianwei’s hands, it is like flying and charging into battle. At last, Dian Wei lost and die in a fight because his halberd has been stolen by others in a midnight.",
    },

    {
        name: "Double-Iron Halberd",
        weaponType: "Halberd",
        weilder: "Dian Wei",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DianWei.png",
        description: "This halberd is owned by Dian Wei. The left hand halberd weighs 39 kilograms, and the right hand halberd weighs 41 kilograms. It is only made of ordinary iron, but in Dianwei’s hands, it is like flying and charging into battle. At last, Dian Wei lost and die in a fight because his halberd has been stolen by others in a midnight.",
    },

    {
        name: "Double-Iron Halberd",
        weaponType: "Halberd",
        weilder: "Dian Wei",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DianWei.png",
        description: "This halberd is owned by Dian Wei. The left hand halberd weighs 39 kilograms, and the right hand halberd weighs 41 kilograms. It is only made of ordinary iron, but in Dianwei’s hands, it is like flying and charging into battle. At last, Dian Wei lost and die in a fight because his halberd has been stolen by others in a midnight.",
    },

    {
        name: "Double-Iron Halberd",
        weaponType: "Halberd",
        weilder: "Dian Wei",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DianWei.png",
        description: "This halberd is owned by Dian Wei. The left hand halberd weighs 39 kilograms, and the right hand halberd weighs 41 kilograms. It is only made of ordinary iron, but in Dianwei’s hands, it is like flying and charging into battle. At last, Dian Wei lost and die in a fight because his halberd has been stolen by others in a midnight.",
    },

    {
        name: "Double-Iron Halberd",
        weaponType: "Halberd",
        weilder: "Dian Wei",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DianWei.png",
        description: "This halberd is owned by Dian Wei. The left hand halberd weighs 39 kilograms, and the right hand halberd weighs 41 kilograms. It is only made of ordinary iron, but in Dianwei’s hands, it is like flying and charging into battle. At last, Dian Wei lost and die in a fight because his halberd has been stolen by others in a midnight.",
    },

    {
        name: "Double-Iron Halberd",
        weaponType: "Halberd",
        weilder: "Dian Wei",
        date: "1512 - 1515 ca.",
        imageUrl: "./imgs/DianWei.png",
        description: "This halberd is owned by Dian Wei. The left hand halberd weighs 39 kilograms, and the right hand halberd weighs 41 kilograms. It is only made of ordinary iron, but in Dianwei’s hands, it is like flying and charging into battle. At last, Dian Wei lost and die in a fight because his halberd has been stolen by others in a midnight.",
    },


    
]



var weaponsCardData = templateCard({
    weapons
});



$("#weapon-list").html(weaponsCardData);




