<!-- This is the file for Gallery Page -->

<?php
    session_start();
    if(empty($_SESSION['username']) || $_SESSION['username'] == '') {
        header("Location: http://localhost/multimediaproject/newdesign/index.php");
        die();
    }
?>

<?php
    include_once 'header.php';
?>

<div class="animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="1000" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">

    <!-- Gallery Page Carousel Section -->
    <section class=" gallery-carousel d-flex flex-column">
        <img src="./imgs/TopCarousel-2.png" alt="">
        <h4>Welcome to gallery page</h4>
        <p>Weapon is one of the oldest tools of mankind. For humans without carapace, claws and sharp beaks, the weapon is their most important helper in order to survive in the jungle world where the weak and the strong. The acquisition of food and war are all inseparable from the weapon. In this sense, it can be said that human civilization has developed from the blade. However, it was civilization that changed the nature of the weapons. Since then, weapon has been linked to the prosperity and decline of a nation, which is particularly typical in the history of Chinese civilization. Fortunately, while the Chinese have developed world-renowned weapon technology and art, they have also used various weapons to create a rich and colorful culture and life. Just as we evaluate the sea, whether it is praise or curse, we have to admit that weapon is one of the greatest inventions of mankind.</p>
    </section>
    <!-- End Gallery Page Carousel Section -->

    <!-- Gallery Posts Section -->
    <section class="feature-posts  p-0 m-0 d-flex flex-column align-items-center justify-content-center">
        <div class="upper-box d-flex justify-content-between align-items-center ">
            <h4 class="my-2">Gallery</h4>

            <div class="d-flex p-0 m-0 justify-content-center align-items-center">
                <h4 class="m-0 px-3">Select: </h4>
                <div class="select-box d-flex flex-column p-0 m-0 justify-content-center align-items-end">
                    
                    <div class="options-container order-1 p-0 m-0">
                        <div class="option">
                            <input type="radio" class="radio" id="all" name="category" data-filter="All">
                            <label for="all" class="px-1">All Dynasty</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="qin" name="category" data-filter="Qin">
                            <label for="qin" class="px-1">Qin Dynasty</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="han" name="category" data-filter="Han">
                            <label for="han" class="px-1">Han Dynasty</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="threeKingdom" name="category" data-filter="ThreeKingdom">
                            <label for="threeKingdom" class="px-1">Three Kingdom Dynasty</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="song" name="category" data-filter="Song">
                            <label for="song" class="px-1">Song Dynasty</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="ming" name="category" data-filter="Ming">
                            <label for="ming" class="px-1">Ming Dynasty</label>
                        </div>
                        <div class="option">
                            <input type="radio" class="radio" id="qing" name="category" data-filter="Qing">
                            <label for="qing" class="px-1">Qing Dynasty</label>
                        </div>
                        
                    </div>
                    <div class="selected order-0 px-1 m-0 d-flex justify-content-between align-items-center">All Dynasty <i class="fas fa-angle-down m-0 px-2 py-2"></i></div>
                </div>
            </div>
        </div>

        <div class="info-container">
            <div class="dynasty-info All">
                <h4>Representative weapons of each dynasty</h4>
                <p>The history of the knife can be traced back to the Stone Age. At that time, people made knives and used them as tools. Various forms of knives play many roles in production and life. In the civilized society, although the knife as a tool showed a wide range of functions, it also appeared in the war and played the role of a killing weapon. In ancient China, swords have experienced the development of the age of bronze, steel and firearms. They have been active on the social stage in different forms and roles. They have played an important role in maintaining the fortune of the country and developed world-famous sword skills. The bronze swords of the Warring States period, the ring-sword swords of the Han Dynasty, the Mo swords of the Tang Dynasty and the waist swords of the Ming Dynasty all played a frightening role in the history of war. At the end of the Qing Dynasty, with the end of the cold weapon era, the sword withdrew from the battlefield.</p>
            </div>
    
            <div class="dynasty-info Qin">
                <h4>The weapon of the pre-Qin era-the pride of the Bronze Age</h4>
                <p>Starting from the Xia Dynasty in the 21st century BC, China entered the Bronze Age. Copper is added with tin and lead to form a bronze alloy, which has high hardness and low melting point, and is easy to process, making it an ideal material for making swords. The sword thus entered the era of metal as the main material. The pre-Qin era was a period when Chinese bronze swords were produced and highly developed. Although its origin may be affected by external influences, the craftsmanship in its mature period has undoubtedly reached a level that is enough to surprise the world. The sword of the Yue people and the sword of the Qin State to defeat the enemy are outstanding representatives of the bronze sword of this period.</p>
            </div>
    
            <div class="dynasty-info Han ">
                <h4>The weapon in the Han Dynasty—Steel steal replaced bronze weapon</h4>
                <p>In the Han Dynasty, with the advent of the cavalry era, the stabbing method of the bronze sword could no longer meet the cavalry tactics in high-speed movement. On the other hand, the flourishing steelmaking industry in the Western Han Dynasty provided tougher materials for weapons. By the end of the Western Han Dynasty, steel weapons basically replaced bronze weapons. The most distinctive feature on the battlefield in the Western Han Dynasty was the "ring-headed iron sword", which quickly replaced the long sword because it was good at chopping. Emperor Wu of the Han Dynasty set up iron officials throughout the country to take charge of the production of ironware. In the Eastern Han Dynasty, 100 steel-making and local quenching technology were used to make it stronger and sharper.</p>
            </div>

            <div class="dynasty-info ThreeKingdom ">
                <h4>The development of steel weapons in the Three Kingdoms, Two Jins, Southern and Northern Dynasties</h4>
                <p>During the Three Kingdoms, Jin and Southern and Northern Dynasties, there were frequent wars, and the knife was still one of the main weapons of war. During this period, the output of steel knives was large, and the shape basically continued the Han knives, and the ring-head long knives were still the main ones. However, new changes have also appeared, such as the blade being shortened, the blade is thickened, the ring is enlarged and drooping, the handguard is lengthened, the tip of the blade is folded toward the back, and the blade is generally inscribed. In the middle and late Northern Dynasties, a new type of ring knife with a short body and a thick back and a wide blade began to spread. During this period, the knife-making technology was more exquisite. Qiwuhuaiwen of the Northern Qi Dynasty developed the steel filling method and created the famous iron knives. The steel is flexible and hard, durable, and can "cut the armor for more than 30 times."</p>
            </div>

            <div class="dynasty-info Tang ">
                <h4>Sui weapons and Tang weapon-the heyday of Chinese weapons</h4>
                <p>During the Sui and Tang Dynasties, the Chinese sword culture entered its heyday without history. In the Tang Dynasty, new sword styles were developed from the ring head sword and the long sword of the Han Dynasty. In addition to the short-handled yi knife, barrier knife and horizontal knife, a long-handled "mo knife" was also developed, which was extremely powerful. Strong. Infantry troops lined up in front of the formation in a horizontally dense formation, "advancing like a wall," and played a key role in the war against the nomads. Tang Dao, as a peak in the development of China's cold weapons, not only accompanied the establishment, prosperity, sorrows and joys of the Tang Empire, but also affected the entire Asian cold weapons culture.</p>
            </div>

            <div class="dynasty-info Song ">
                <h4>Weapons in the Song and Yuan Dynasties - a mature form</h4>
                <p>The Song Dynasty entered an era when cold and hot weapons were used together, and cold weapons still prevailed. The knife is the main combat weapon. The knives of the Song and Yuan dynasties have used the skill of clamping steel, and have absorbed the style of the northwest minority, and the shape has been improved. The long knife has a slightly curved body, a wider head, a thick ridge and a thin blade, and the narrow and long square head is also changed to a sharp front and oblique shape with a guard. Judging from the unearthed cultural relics and ancient books, there were many long-handled iron knives suitable for actual combat during this period, and short-handled weapons were used in conjunction with long knives to break the enemy’s iron armor. At this time, swords were rarely used in the army, mainly for officers to wear and command. During the Yuan Dynasty, long-handled knives were gradually reduced in the army, and sabers were mostly used immediately, mainly in the form of ring knives and scimitars.</p>
            </div>

            <div class="dynasty-info Ming ">
                <h4>Weapons of the Ming Dynasty-Chinese weapons in decline</h4>
                <p>Although the firearms of the Ming Dynasty gradually matured, they did not reach the level of complete practicality. Therefore, knives were still the basic equipment of infantry. The main types included waist knives, long knives and short knives. In the late Ming Dynasty, the waist sword became the standard weapon of the army. In addition to the inheritance of Song and Yuan, there is another type of imitation of Japanese swords. This kind of knife has a long and narrow shape with a beautiful curved arc. The joint between the guard and the blade is equipped with a swallow mouth, with a long face and a short back, which can increase the strength of the knife. The influence of the Japanese sword is also shown on the long sword, which is about 2 meters long, has a long handle, and is easily held by both hands. It is used by infantry and has great lethality.</p>
            </div>

            <div class="dynasty-info Qing ">
                <h4>Weapons in the Qing Dynasty-the last glory of Chinese weapons</h4>
                <p>The Qing army used both cold weapons and firearms in combat, and the standard saber was the main weapon for close combat. Historically, the Qing Dynasty saw the largest number of swords, the most complete varieties, the most stringent levels, and the most complete functions. Standard sabers include Shun Dao, Wo Dao, Zha Dao, Piao Dao, and Chop Sabre. The emperor and officials have their own sabers. There are various forms of folk knives, such as waist knives, lancets, goose ling knives, thick-back machete, etc. for single knives. With the invasion of Western powers, Chinese cold weapons and old-style firearms were replaced by Western swords and modern guns, marking the beginning of the withdrawal of Chinese swords from the war arena.</p>
            </div>

        </div>

        <div class="bottom-box" id="weapon-list">
            <img src="./imgs/Qing/" alt="">
            
            <!-- Gallery will be render by Handlebars JS-->

        </div>
    </section>
    <!-- End Gallery Posts Section -->

</div>


    <!-- Handlebars JS -->
    <script id="weapon-card-template" type="text/x-handlebars-template">
        {{#each weapons}}
            <a href="" class="image {{date}} itembox slideup" data-bs-toggle="modal" data-bs-target="#weapon{{@index}}" >
                <div class="content">
                    <img src="{{imageUrl}}" alt="">
                    <div class="overlay"></div>
                    <div class="info d-flex flex-column justify-content-start align-self-start">
                        <h4>{{name}}</h4>
                        <p>{{weaponType}}</p>
                    </div>
                </div>
                
                <div class="modal fade" id="weapon{{@index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-body d-flex flex-md-row justify-content-md-around align-items-md-center">
                                <div class="box d-lg-flex d-none">
                                    <div class="content">
                                        <img src="{{imageUrl}}" alt="">
                                    </div>
                                </div>
                                <!-- <img src="./imgs/DaoCoverEdited.png" alt=""> -->
                                <div class="d-flex flex-column box-2 align-items-center justify-content-center">
                                    <i class="fas fa-caret-up"></i>
                                    <div class="information d-flex flex-column align-content-center justify-content-start">
                                        <h1>{{name}}</h1>
                                        <h2><span>Weapon type:</span> {{weaponType}}</h2>
                                        <h2><span>Owner:</span> {{weilder}}</h2>
                                        <h2><span>Dynasty:</span> {{date}}</h2>
                                        <p>{{description}}</p>
    
                                    </div>
                                    <i class="fas fa-caret-down"></i>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </a>

        {{/each}}
    </script>
    <!-- End Handlebars JS -->


    <!-- Filter Function -->
    <script type="text/javascript">
        $(document).ready(function () {

            $('.dynasty-info').each(function() {
                $(this).fadeOut();
            });

            $(".info-container").children(".All").fadeIn();

            $('.radio').click(function() {
                const value = $(this).attr('data-filter');
                if (value == 'All') {
                    $('.itembox').show('1000');
                }
                else {
                    $('.itembox').not('.'+value).hide('1000');
                    $('.itembox').filter('.'+value).show('1000');
                }
                
                $(".dynasty-info").fadeOut('1000')
                
                $('.dynasty-info').each(function() {
                    if($(this).hasClass(value)) {
                        $(this).fadeIn('1000');
                    }
                });


                $(this).addClass('active').siblings().removeClass('active'); 
                
            });
        });

    </script>

    <!-- End Filter Function -->


<?php
    include_once "footer.php";
?>