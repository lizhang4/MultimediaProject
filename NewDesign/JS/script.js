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
        date: "ThreeKingdom",
        imageUrl: "./imgs/GuanYu.png",
        description: "The Green Dragon Crescent-Moon Sabre is one of the Yanyue Swords. According to documentary records and unearthed cultural relics, the Yanyue Swords began to appear in the Song Dynasty. Due to its weight, it was mainly used to practice arm strength, not as a weapon in actual combat. The Green Dragon Crescent-Moon Sabre is a weapon used by Guan Yu. The book describes the Green Dragon Crescent-Moon Sabre weighing 82 kilograms, also known as the Leng Yan Saw. Guan Yu used it to kill many generals, so later generations also called the Green Dragon Crescent-Moon Sabre as the Guan Dao.",
    },

    {
        name: "Sword Of Heaven",
        weaponType: "Sword",
        weilder: "Cao Cao",
        date: "ThreeKingdom",
        imageUrl: "./imgs/YiTianJian.png",
        description: 'This sword appears in the forty-one chapter of “romance of the three kingdoms”. This sword was originally owned by Cao Cao. It is said to be extremely sharp, cutting iron like mud. Cao Cao used the sword to kill Lu Boshe’s family by mistake, and sigh “I would rather take the world, and stop teaching the world to take me”. The Sword of Heaven and Qing Gang Sword were collectively called "Peerless Double Swords", both of which were owned by Cao Cao. Cao Cao used the sword of heaven to suppress his might and the Qing Gang Sword to kill. Cao Cao always bring this sword with him to manifest his status.'
    },

    {
        name: "Zhang Ba Serpent-headed Spear",
        weaponType: "Spear",
        weilder: "Zhang Fei",
        date: "ThreeKingdom",
        imageUrl: "./imgs/ZhangFei.png",
        description: "Zhang Ba Serpent-headed Spear, the name of an ancient weapon. Also known as Zhang eight-point steel spear. It is all made of iron point steel. The spear is one foot long and the spear tip is eight inches long. The spear has double fronts, and it is shaped like a snake, hence the name. The Zhang Ba Serpent-headed Spear is comparable to the Green Dragon Crescent-Moon Sabre, and it is famous all over the world. The tip of the spear is like a white snake, and the body of the spear weighing more than fifty kilograms, sweeps the battlefield in the black brocade, picks the enemy through armor, and shoots at the enemy, and there is one. The enemy general was stabbed to death under the spear, which is a symbol of the fear of the enemy general.",
    },

    {
        name: "Iron Tyre Bow",
        weaponType: "Bow",
        weilder: "Huang Zhong",
        date: "ThreeKingdom",
        imageUrl: "./imgs/HuangZhong.jpg",
        description: "This bow is owned by Huang Zhong, a member of five tiger general. The bow is one of the indispensable cold weapons for large-scale wars. Most of them are worn by brave generals who are stronger than others, and the weight is about 200.",
    },

    {
        name: "Qamdo Military Attache's Waist Sword",
        weaponType: "Sword",
        weilder: "Dian Wei",
        date: "Ming",
        imageUrl: "./imgs/QamdoMilitaryAttacheWaistSword.png",
        description: "This sword was originally stored in the hands of the descendants of the Baili chieftain in Qamdo area. The whole sword is huge. The handle and the handle are inscribed with flowers and gold. The center is hollowed out and embedded with a silver hammer to press the pieces, and the handle is embedded with coral. The stalls are made of Yunzhi-type ferrous gold, the sheath is made of wood and the skin of the thigh, with a ridge in the middle. Sheath frame iron hollow gold. The blade is wider and thicker than ordinary Tibetan sword, and the satin pattern is clear and flowing. The shape of the lifting beam is relatively special. The hanging pendants are not connected, but are riveted to the iron frame. The sheath bundle is riveted to the hanging pendants with double iron rings. This style is similar to the Hall area saber and is a legacy of Mongolian pendants.",
    },
    

    

    {
        name: "Qing Gang Sword",
        weaponType: "Sword",
        weilder: "Cao Cao",
        date: "ThreeKingdom",
        imageUrl: "./imgs/BronzeSword.jfif",
        description: "The Qing Gang Sword, a weapon that is as famous as the Reliant Sword. It cuts iron like mud and is extremely sharp. It is one of the two swords owned by Cao Cao, with the word ‘Qing Yan’ inlaid in gold on the hilt. The sword was always matched by Xiahouen. Later, Xiahouen was stabbed to death by Zhao Yun and belonged to Zhao Yun. He fell into the land of no one among Cao Cao’s thousands of horses. He cut down both sides of the banner, seized three swords, and stabbed and killed. More than 50 famous generals in Cao Ying died and became famous in the first battle.",
    },

    

    {
        name: "Seven Star Sword",
        weaponType: "Sword",
        weilder: "Cao Cao",
        date: "ThreeKingdom",
        imageUrl: "./imgs/SevenStarSword.png",
        description: "This sword appears in the forth chapter of “romance of the three kingdoms”. It was originally owned by Situ Wang Yun. When Cao Cao assassinated Dong Zhuo, he borrowed a sword from Wang Yun to assassinate him. After the assassination failed, Cao Cao dedicated the sword to Dong Zhuo. After Dong Zhuo was killed by Wang Yun, this sword returned to Wang Yun's hand. Soon, Dong Zhuo's army team attacked Li Chang into Chang'an. Wang Yun was killed in the fight, the sword fallen into Li Chang's hand. Later, Li Chang was killed by Cao Cao's troops. At last, this sword fell into the hands of Cao Cao.",
    },

    {
        name: "The Twins Sword",
        weaponType: "Sword",
        weilder: "Liu Bei",
        date: "ThreeKingdom",
        imageUrl: "./imgs/TheTwinsSword.png",
        description: 'This sword is owned by Liu Bei. The male sword is three feet and seven inches long while the female sword is three feet and three inches. The twins sword is protected by the yellow dragon and phoenix. These two divine beasts are too bloodthirsty and extremely hostile. If there is no battle to fight, they must be sacrificed with human blood. If the sword owner considers the loyalty and benevolence mentioned above, he can be filled with compassion. The tears of anger are replaced, thereby dissolving the hostility of the two gods. Rumor has it that there is an invincible secret hidden in the twin sword.',
    },

    {
        name: "Tiger Head Cham Golden spear",
        weaponType: "Spear",
        weilder: "Ma Chao",
        date: "ThreeKingdom",
        imageUrl: "./imgs/MaChao.png",
        description: "This spear is owned by Ma Chao, a member of five tiger general. The spear body is made of cold iron, measuring one foot and three inches in length. The head of the spear is in the shape of a black gold tiger head. It swallows the blade with a tiger's mouth. The spear body is gilded and made of platinum.",
    },

    {
        name: "Double-Iron Halberd",
        weaponType: "Halberd",
        weilder: "Dian Wei",
        date: "ThreeKingdom",
        imageUrl: "./imgs/DianWei.png",
        description: "This halberd is owned by Dian Wei. The left hand halberd weighs 39 kilograms, and the right hand halberd weighs 41 kilograms. It is only made of ordinary iron, but in Dianwei’s hands, it is like flying and charging into battle. At last, Dian Wei lost and die in a fight because his halberd has been stolen by others in a midnight.",
    },

    {
        name: "Bright Silver Spear",
        weaponType: "Spear",
        weilder: "Zhao Yun",
        date: "ThreeKingdom",
        imageUrl: "./imgs/ZhaoYun.png",
        description: "This spear is owned by Zhao Yun, a member of five tiger general. With the qing gang sword in the left hand, the bright silver spear in the right hand, the white dragon horse, the white helmet, white armor, is the savior of Changbanpo riding alone, smashed back and forth among the millions of Cao’s army, whom is the fierce general, Changshan, Zhao Yun, also named as Zhao Zilong! This is how the novel “romance of three kingdoms” describe the spear and Zhao Yun. This spear also named as Gentian Silver Spear. It is recorded in the wild history that this spear was passed down from the family, and he was given to him after his brother died. In addition, during the Battle of Changbanpo, Zhao Yun killed Cao Cao's attendant Xiahouen and obtained Cao Cao's sword (qing gang sword) from Xiahouen. Zhao Yun used his own spear (bright silver spear) and the snatched sword (qing gang sword) to break out of the siege and returned to Liu Bei's side. Since then, Zhao Yun has been using the Bright Silver Spear and the Qing Gang Sword as his weapons.",
    },

    {
        name: "Long-Handle Blade",
        weaponType: "Blade",
        weilder: "Cao Hong",
        date: "ThreeKingdom",
        imageUrl: "./imgs/ChangBingDao.jpg",
        description: "A long-handle blade is a common weapon in three kingdoms. It is a long weapon. It is actually a knife with long-handle. The famous general that use long-handle knife is Cao Hong.",
    },

    

    {
        name: "Curly Grass Pattern Tibetan Sword",
        weaponType: "Sword",
        weilder: "Dian Wei",
        date: "Ming",
        imageUrl: "./imgs/CurlyGrassPatternTibetanSword.png",
        description: "This short sword is originated from Danba County, at the junction of Khampa and Amdo, so the style of the sword is not pure Khampa or Amdo style. The parts of this sword are complete without patchwork. This sword is decorated with iron and gold. The sheath tail has a ridge in the middle, and the bottom is gui-shaped. It widens along the direction of the sheath opening. Slightly diamond-shaped, the sword grid is rectangular, belonging to the Kamba style, the handle is bundled, and the front of the handle has a slight ridge line, and the handle is inlaid with a coral seat in the shape of a shank. The sheath is wrapped in wood and leather. The gold decoration of the sheath tail is a typical twisted branch. This twisted branch style is common in statues and utensils in the Central Plains and Tibet.It is mainly decorated on the side strips. This pattern on the scabbard is extremely rare. There should be a gem inlay seat in the middle of the sheath mouth, with a twisting pattern from the center to the four corners. This twisting style is relatively early, and the style of shank bundle and shank twisting is the same as the sheath mouth. The forging of the blade is excellent, the iron is pure, and the blade is a typical ancient division. This sword is one of the most sophisticated Tibetan short swords known at present. Judging from the decoration and shape, it is judged to be a short sword in the late Ming Dynasty as a whole. Judging from the grade and the sophistication of the production, it was carried by a certain nobleman or chieftain.",
    },


    {
        name: "Khampa Military Attache Sabre",
        weaponType: "Sabre",
        weilder: "Dian Wei",
        date: "Qing",
        imageUrl: "./imgs/KhampaMilitaryAttacheSabre.png",
        description: "This sabre was a military officer's sabre in Tibetan areas in the Qing Dynasty. Equipped with iron, a wishful-shaped knife head, inlaid with a red coral. Trapezoidal handles, the front is hollowed out and decorated with gold curled grass patterns, and the side is silver. The handle wood is wrapped with silver silk, plain gold, with two protrusions on the front and back, connecting grooves in the middle, and one protrusion on the left and right sides, and the folded edge is decorated with string patterns of varying thickness. The sheath frame is encapsulated as a whole, the front edge is ribbed, and the hollow is decorated with golden curled grass pattern, and the side is engraved with silver swastika pattern. The sheath tail is in a 'U' shape, and the left and right ends enclose the sheath frame, and are welded together with the sheath frame. It is not made in one piece. The sheath is made of wood, wrapped in strands of skin, with ridges in the middle, covered with silver sheets on the upper and lower ends, and hammered and engraved with curly grass patterns and lotus terrace patterns. Two plain iron hoops and sheath bundles, riveted to handle beams, and hung with gold to make auspicious clouds. The blade is straight-edged, the root of the blade is slightly wider than the tip, the back of the blade is ridged, the cutting edge is forged with flowing water, and the forging pattern is turned back to the root at the 1/3 of the tip. The overall size of the blade is large and very strong.",
    },

    {
        name: "Iron and gold curled grass pattern Tibetan spear",
        weaponType: "Spear",
        weilder: "Dian Wei",
        date: "Ming",
        imageUrl: "./imgs/IronAndGoldCurledGrassPatternTibetanSpear.png",
        description: "This spear has a high ridge and a wide blood trough. The middle section is separated by a rope knot, and the blood trough is decorated with golden curly grass. This spear is a large-size Tibetan spear with a high degree of gold retention. It was a high-level ritual tool used by Tibetan nobles in the Ming Dynasty.",
    },

    {
        name: "Tibetan Iron And Gold Flame Spear",
        weaponType: "Spear",
        weilder: "Dian Wei",
        date: "Ming",
        imageUrl: "./imgs/TibetanIronAndGoldFlameSpear.png",
        description: "This spear is a weapon held by the God of Horse Tau Ming in Tibetan Buddhism, which symbolizes piercing and cutting off various prejudices and prejudices. This spear is derived from the iron spear in the ancient Indian war. The blade shape is like a wide sword with waistband, the gun tip is gold spray pattern on both sides, the gun body is silver pattern, the multi-edge gun hoop is gold and silver mutually, the color matching is luxurious and pleasing, the casing copper hoop is intact, and the whole tool has no blade cutting Longitudinal flaws. This spear is a combination of weapons and magical weapons.",
    },

    {
        name: "Qin Jian",
        weaponType: "Sword",
        weilder: "Dian Wei",
        date: "Qin",
        imageUrl: "./imgs/Qin/QinJian.png",
        description: "The most fascinating thing about the bronze weapons unearthed in Pit No. 1 and No. 2 of the Terracotta Warriors and Horses of Qin Shihuang is the sharp and tough Qin bronze long sword. The Qin sword with a willow-like blade is thin, long and pointed, with a length of 81-94.8 cm, which is far beyond the swords of other vassal states in the Warring States period (generally 50-65 cm in length).Looking back on the development of the Central Plains Bronze Sword, the blade has been continuously lengthening. When it first appeared, the length of the sword was only 20 or 30 centimeters; by the Spring and Autumn Period and the Warring States period, the length generally reached about 50-60 centimeters; in the late Warring States period, some swords exceeded 70 centimeters, and the maximum length was 75 or 76 centimeters. , The length of Guanzhong Qin Jian has reached a new level, exceeding 80 centimeters, and the longest one is nearly 95 centimeters.The Qin-style bronze sword is not only long, but also very sharp. Some swords were unearthed without rust, as bright as new, with sharp blades. After testing, it can still penetrate 18 layers of paper at one time. The surfaces of these swords are grayish-yellow, with fine tissues and no trachoma. Moreover, the surface of the blade has been finely filed and polished, so it is extremely smooth and bright.Qin Jian's sword body is very long, and the sword stem (handle) is also relatively long. Bronze swords unearthed from Pit No. 1 and No. 2 of the Qin Warriors have a stem length of about 17-20 cm. According to the length, weight, and practical functions of Qin swords, most of Qin swords are used with two hands (two-handed swords can also be used with one hand in some cases); a few with shorter stems may be one-handed swords.Research has found that this Qin sword uses anti-rust technology similar to modern chromium salt oxidation technology. This technology was invented by Germany and the United States in the 20th century. As early as two thousand years ago, Qin Jian would actually adopt this technique, so we have to praise the wisdom of the ancients.",
    },

    {
        name: "Qin Tong Pi",
        weaponType: "Sword",
        weilder: "Dian Wei",
        date: "Qin",
        imageUrl: "./imgs/Qin/QinTongPi.png",
        description: 'Beryllium is one of the famous long weapons in ancient times. It is a long-handled weapon that originated from short swords. Many beryllium soldiers unearthed in the past were mistaken for short swords. The shape of beryllium is very similar to a dagger. The front of beryllium is the same as that of a dagger. It has a flat ridge and two edges. The body of the beryllium is hexagonal in shape. The shape is very similar to a dagger. It is about 30-35 cm long and has a flat or rectangular stem at the back. , Used to install the stalk, generally a round hole is opened at the proximal end of the stem, so that the nail can be fixed on the long stalk. It is a kind of extremely sharp assassination weapon with a bamboo handle or wooden handle with a length of about 3 to 3.5 meters.',
    },

    {
        name: "Qin Tong Ji",
        weaponType: "Halberd",
        weilder: "Dian Wei",
        date: "Qin",
        imageUrl: "./imgs/Qin/ji.jpg",
        description: 'The pit of the Qin warriors also unearthed precious weapons such as bronze ge, bronze spear, and bronze halberd. These weapons are well preserved, and some still retain the golden color of bronze, with extremely sharp blades and chilling air. The body is also engraved with inscriptions such as "Four-year-old Sangbang Lu Buwei, Temple Worker, Cheng Me, Gong Ke", "Ji", "Temple Worker" and "Wen" etc.',
    },

    {
        name: "Qin Mao",
        weaponType: "Spear",
        weilder: "Dian Wei",
        date: "Qin",
        imageUrl: "./imgs/Qin/Mao.jfif",
        description: 'The bronze spears unearthed from the pit of Qin warriors are also sharp and exquisite, with a total length of 15.4 to 17.6 cm. Different from the Wuyue bronze spear, which has gorgeous curves and ornaments, the Qin bronze spear has simple and smooth lines, dignified and solid, with a smooth surface, regular production, and sharp blades, reflecting its powerful combat performance. "Temples" are generally engraved with the word "Temple Workers".',
    },

    {
        name: "Qin Nu",
        weaponType: "Crossbow",
        weilder: "Dian Wei",
        date: "Qin",
        imageUrl: "./imgs/Qin/QinNu.jfif",
        description: 'More than two thousand years ago, after the elimination of the six countries of the Central Plains, the northern nomadic Huns became the main opponents of the Qin army. When the Qin army was engaged in the war of unification, the Xiongnu cavalry took the opportunity to go south and invaded a large area of land south of the Yellow River. In Xianyang, the capital of the Qin Dynasty, the question of how to deal with the fierce Huns cavalry was put before Qin Shihuang. When the Xiongnu riders charge at high speed, traditional infantry weapons are difficult to resist. According to historical records, a long-range weapon called a crossbow may have played a leading role in the battle of the Qin army to defeat the Huns.',
    },

    {
        name: "Huan Shou Dao",
        weaponType: "Sabre",
        weilder: "Dian Wei",
        date: "Han",
        imageUrl: "./imgs/Han/HuanShouDao.jfif",
        description: 'In the Western Han Dynasty, due to the development of cavalry tactics, a melee combat weapon that was conducive to slashing was developed rapidly, which replaced the sword and became the standard weapon for future melee combat. Han Dynasty knives have a slender body, a thick back and a straight knife, and the length is more than one meter. The rear end of the shank is used as a large oblate ring, so it is called "ring first knife". The earliest ring-headed knife discovered so far is a funerary from the tomb of Jing Wang Liu Sheng of Zhongshan in the Western Han Dynasty. The whole body is 62.7cm long and consists of three parts: the blade, the stem and the head. The blade is slender and has a circular head. The advancement of smelting technology in the Eastern Han Dynasty made the appearance of a more sophisticated ring-head long knife. The ring-headed knife found in the Han Tomb in Cangshan, Shandong Province in 1974 is 111.5cm long and three times the thickness of the back of the knife. "Jiyang is good for descendants" eighteen wrong gold inscriptions. The sixth year of Yongchu was 112 AD. The thirty-sixth year was about to fry the steel and repeatedly forge thirty layers after forging. This is what is usually called a hundred steel-making. Through metallographic identification, its carbon content is only 0.6-0.7%. The cutting edge is quite sharp after quenching. Observing the cross-section of the knife through a microscope with a magnification of 100 times, it can be seen that silicate inclusions are evenly distributed in about 30 layers. Judging from the unearthed objects of the Han Dynasty and related stone reliefs, the handles of knives in the Han Dynasty were mostly clamped with wood chips, wrapped with thick ropes, but without guards. This form has also been extended to the Wei, Jin and Southern and Northern Dynasties.',
    },

    {
        name: "Shou Ji",
        weaponType: "Halberd",
        weilder: "Dian Wei",
        date: "Han",
        imageUrl: "./imgs/Han/ShouJi.jfif",
        description: 'Similar to the head of a "Bu" shaped iron halberd, it has a short branch on the side of the straight thorn. The end of the straight thorn seems to be wrapped with a string for hand holding. It is held with one hand when used, and it is thrown. enemy. Most people in the Han Dynasty used short halberds to protect themselves. During the Han Dynasty, the halls of aristocratic officials often had soldier orchids (weapon racks) for holding old sabers and sabers. This kind of image of soldiers can often be seen on stone reliefs and bricks in Han tombs, except for swords. There are often hand halberds, and it seems that people often use hand halberds as a self-defense weapon.',
    },

    {
        name: "Gou Shang",
        weaponType: "Hook/Shield",
        weilder: "Dian Wei",
        date: "Han",
        imageUrl: "./imgs/Han/GouShang.jpg",
        description: `Hook setting is a common compound weapon in the Han Dynasty that combines a hook and a shield. This kind of weapon has three functions of defense, hook, and push. It is generally used with the ring head knife: in combat, the enemy's long weapon is usually hooked with the left hand hook (especially effective for the branches with the head of the halberd), and at the same time the right hand Ring the first sword to swing at the enemy's door. Some martial arts novels describe it as a hand-guard hook weapon, which is pure nonsense. There are not many records about hook inlays in historical documents, and it is difficult to see the whole picture. However, the object has been discovered many times in archaeological excavations. In addition. There are also many hook inlays and patterns using hook inlays in the stone and brick portraits of the Han Dynasty. The information is still abundant. The hook setting is bow-shaped as a whole. There is an outward hook at each end, and the two hooks are generally longer than the lower hook. Long iron collars with cylindrical hooks are slightly bent back. The top of the upper hook is sharp; some of the ends of the lower hook are small balls. Some are sharp-pointed: a handle with a small iron inlay (shield) connected between two hooks, and an inlay made of a rounded rectangular thin iron plate in front of the handle. Use round cap nails to fix on the hook frame. Some inserts are in the shape of a plough with a wide top and a narrow bottom. The hook setting is generally about 60-70 cm long (including the upper hook, the lower hook and the middle setting).`,
    },

    {
        name: "Piao Dao",
        weaponType: "Sabre",
        weilder: "Dian Wei",
        date: "Song",
        imageUrl: "./imgs/Song/PiaoDao.jpg",
        description: `The first appearance of Piao Dao in the official history is related to a ban in the eighth year of Emperor Renzong of the Song Dynasty. At that time, the emperor issued an edict: "Crotch knives are not allowed on Chuanshan Road." In other words, you can't see anyone with a knife on his waist here. Later, the Lizhou Road transfer asked Chen Yi to play, saying that this kind of knife was very safe. It was tied to a short gun barrel as a "pull knife", and mounted on a short wooden handle was a "she knife". This shek knife is a necessity for the people living in the mountains. Because mountain farming requires slash-and-burn cultivation, it is hoped that the emperor will take back his edict. From Chen Yi’s memorial, it’s not difficult to understand that Pudao was actually a utility knife that was popular among the people, but it was somewhat misinformed because of different accents in different regions. Pudao with a short wooden handle can indeed resemble Chen Yi. Don't be around your waist as you said.`,
    },

    {
        name: "Yao Dao",
        weaponType: "Sabre",
        weilder: "Dian Wei",
        date: "Qing",
        imageUrl: "./imgs/Qing/YaoDao.jpeg",
        description: `At the end of the Ming Dynasty and the beginning of the Qing Dynasty, the Eight Banners of Manchu advocated martial arts, and the trend of wearing waist swords was extremely high. The portraits of emperors and founders of the early Qing Dynasty painted by the people of the Qing Dynasty mostly wore knives. Among the emperors in the early Qing Dynasty, Emperor Qianlong especially loved swords. According to the existing physical objects and archives in the Palace Museum in Beijing, during Qianlong's reign, he had ordered the Construction Office of the Ministry of Internal Affairs four times to manufacture swords in batches for him to admire, and the total number reached 90. Among them, the first batch produced 30 knives and 30 swords, which were designed in the 13th year of Qianlong (1748) and completed in the 22nd year of Qianlong, which lasted 10 years. Emperor Qianlong took great pains to make the first batch of swords, and he had to go through everything himself. From the initial paper pattern and wood pattern to the quantity, name, year model, ornamentation, and the sheath of the sword, what parts, the amount of gold used, the nanmu box and the attached wood skin, the full and Chinese characters are almost the same. Acting imperially.　Every time a process is completed, Bai Shixiu, the treasurer of the manufacturing office, and Samuha, the leader of the seven products, are transferred to the chief eunuch Hu Shijie and sent to the Hall of Yangxin for presentation. After Qianlong read it in detail, he often made decrees, such as: "The sword swallows the mouth with the image of the sword name on one side, and the name of the sword on the other side"; "The western flower swallows the sword, and the branches and leaves are painted more robust. The painting is good"; "Thirty ancient swords...Thirty ancient nanmu box styles of ancient swords, and the same box. Qin this." The ministers of the Manufacturing Office were ordered to process, make changes, and then submit them until Qianlong was satisfied. The 60 swords were repeated in this way, and it took 10 years before and after they were finally completed. This shows the importance and dedication of Qianlong. This is probably extremely rare in the past. Treasurer Bai Shixiu was promoted to Yuanwailang for this reason.`,
    },

    {
        name: "Lian Nu",
        weaponType: "Nu",
        weilder: "Dian Wei",
        date: "Qing",
        imageUrl: "./imgs/Qing/LianNu.jfif",
        description: `During the Ming and Qing Dynasties, a continuous crossbow was popular in the society. It consists of a crossbow arm, a bow, a wrench, and an arrow box that can slide on the crossbow arm. The arrow box can hold ten or more than ten short arrows. The bottom of the arrow box is dug with an arrow groove and a ridge for the bowstring to move back and forth. A long strip of small bone piece is installed in the ridge, which can move up and down, which is a machine tooth. The wrench is made of hardwood or metal, and the two shafts on it run through the middle of the crossbow arm and the tail of the quiver. Usually the bowstring supports the arrow in the quiver. When using, first push the wrench forward, and the arrow box will slide forward accordingly. The bowstring will move backward along the string path at the bottom of the arrow box. When it reaches the end, it will fall into the ridge and be hooked. An arrow fell into the arrow slot, blocking the path. At this time, pull the wrench back, and the crossbow will open. When it is stretched to the maximum, the bottom of the arrow box is close to the crossbow arm, and the machine teeth rise, and the bowstring is ejected from the ridge, and then all the arrows blocking the string path are shot out. Its structure is simple and exquisite, and its rate of fire is extremely fast, so it is called a "machine gun weapon", which is considered to be a very perfect and extremely original design.`,
    },

    {
        name: "Qing Qiang",
        weaponType: "Qiang",
        weilder: "Dian Wei",
        date: "Qing",
        imageUrl: "./imgs/Qing/Qiang.jpg",
        description: `Long spear and pen-shaped spear, Jun-shaped spear, and spear-shaped spear of the Qing Dynasty. By the end of the Qing Dynasty, after the war was eliminated, a wide range of spears tended to be unified. The spear head was generally flat, with a round bottom, and a barrel with several copper hoops. Its appearance was close to the spear head, so some people called the spear at this time. This gun has been used until the period of the Great Revolution of the Workers and Peasants in my country. The northern revolutionary base area is called the Hongying Gun, and the southern revolutionary people are called the Junyao. Although the armies and militias of the reactionaries, local tyrants and evil gentry are equipped with foreign guns, they still have to tremble when they see the spears in the hands of the peasants.`,
    },


    




    
]



var weaponsCardData = templateCard({
    weapons
});



$("#weapon-list").html(weaponsCardData);




