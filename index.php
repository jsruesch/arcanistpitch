<?php include('header.php') ?>


<div class="container-fluid">
  <div class="container">

  <div class="row wow fadeInUp pad60-top" data-wow-delay=".05s">
    <img class=" header-logo pad20 animate-text-even" src="img/arcanist-logo-light.svg"/>
  </div>

    <!-- Summary -->
    <div class="row mar60-top">
      <div class="ninebox">
        <div class="tl"></div><div class="tt"></div><div class="tr"></div>
        <div class="lt"></div>
          <div class="mt">
            <div class="row">
              <h1 class="animate-text-odd text-gold">Summary</h1>
            </div>
            <div class="row">
              <p>
                <i class="text-lblue">Arcanist</i> is a fast-paced action/puzzle adventure game. Brew mysterious potions, scour ancient tomes, and unleash powerful spells as you uncover the secrets held within the Arcanist's scriptorium. Gorgeous pixel art visuals and an addictive electronic-Baroque soundtrack accompany you on your quest to learn to manipulate the very elements of magic. Enter the tower and discover what it means to be a true Master of the Arcane.
              </p>
            </div>
            <div class="row mar20-top mar10-bot">
              <img class="animate-text-even mx-auto img-mw-full" src="img/elements.png"/>  
            </div>
          </div>
        <div class="rt"></div>
        <div class="bl"></div><div class="bt"></div><div class="br"></div>
      </div>
    </div>
    <!-- END: Summary -->

    <!-- Genre -->
    <div class="row mar20-top">
      <div class="ninebox">
        <div class="tl"></div><div class="tt"></div><div class="tr"></div>
        <div class="lt"></div>
          <div class="mt">
            <div class="row">
              <div class="col-sm-8 offset-sm-2">
                <img class="img-fw mar20-bot" src="img/gifs/multiplayer-01.gif"/>  
              </div>
            </div>
            <div class="row">
              <h1 class="text-gold animate-text-even">Genre</h1>
            </div>
            <div class="row">
                <p>Action, Adventure, Puzzle</p>
            </div>
          </div>
        <div class="rt"></div>
        <div class="bl"></div><div class="bt"></div><div class="br"></div>
      </div>
    </div>
    <!-- END: Genre -->

    <!-- Details -->
    <div class="row mar20-top">
      <div class="ninebox">
        <div class="tl"></div><div class="tt"></div><div class="tr"></div>
        <div class="lt"></div>
          <div class="mt">
            <div class="row">
              <h1 class="text-gold animate-text-odd">Details</h1>
            </div>
            <div class="row">
              <!-- Accordion -->
              <div class="accordion" id="gameplay-accordion">
                  <!-- Single Player -->
                    <div class="card">
                      <!-- Button -->
                      <div class="card-header" id="single-player">
                        <h5 class="">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#single-player-content" aria-expanded="true" aria-controls="collapseOne">
                            <h3 class="text-white">Single Player</h3>
                          </button>
                        </h5>
                        <div class="downarrow"></div>
                      </div><!-- END: Button -->
                      <!-- Content -->
                      <div id="single-player-content" class="collapse" aria-labelledby="single-player" data-parent="#gameplay-accordion">
                        <div class="card-body">
                          <ul class="disc">
                            <li>
                              <div class="row">
                                <div class="col-sm-8 offset-sm-2">
                                  <img class="img-fw mar20-bot" src="img/gifs/chapter-1-intro.gif"/>  
                                </div>
                              </div>
                              <h3 class="text-lblue">12-Chapter ( 120-Level ) Critical Path</h3>
                              <p>
                                Walking through the woods one evening, you come across a mysterious tower. You are drawn inside, where you discover the scriptorium of the Arcanist--a library full of endless books detailing how to use magic. Hesitant at first, you begin to grow bolder. You lay your hands on one particularly dusty tome that seems to glow with an eerie light. It immediately unleashes a curse that traps you in the tower. In order to free yourself from the curse, you set forth on a quest to learn all you can about this place, its master, and the secrets it holds.
                              </p>                              
                            </li>
                            <li class="mar20-top">
                              <h3 class="text-lblue">Boss Battles</h3>
                              <p>
                                As you master each element of the Arcane, you must battle powerful enemies who draw their energies from that element. Use what you've learned from the Arcanist's library to harness their strength and bring them under your command.
                              </p>
                            </li>
                            <li class="mar20-top">
                              <h3 class="text-lblue">Endless mode</h3>
                              <p>
                                Prove your mastery of the Arcane. Control an onslaught of elemental forces as they become increasingly unstable.
                              </p>
                            </li>
                            <li class="mar20-top">
                              <h3 class="text-lblue">Alchemy bench</h3>
                              <p>
                                Learn to infuse the material world with magical properties. Discover increasingly complex recipes and craft ever more powerful potions to carry with you on your quest.
                              </p>
                            </li>
                            <li class="mar20-top">
                              <h3 class="text-lblue">Spellbook</h3>
                              <p>
                                Become a student of the different branches of the Arcane. Choose which spells you will unlock and craft an arsenal of magical abilities to help you master the elements.
                              </p>
                            </li>
                          </ul>
                        </div>
                      </div><!-- END: Content -->
                    </div>
                  <!-- END: Single Player -->

                  <!-- Local Multiplayer -->
                    <div class="card">
                      <!-- Button -->
                      <div class="card-header" id="local-multiplayer">
                        <h5 class="">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#local-multiplayer-content" aria-expanded="false" aria-controls="collapseTwo">
                            <h3 class="text-white">Local Multiplayer</h3>
                          </button>
                        </h5>
                        <div class="downarrow"></div>
                      </div><!-- END: Button -->
                      <!-- Content -->
                      <div id="local-multiplayer-content" class="collapse" aria-labelledby="local-multiplayer" data-parent="#gameplay-accordion">
                        <div class="card-body">
                          <ul class="disc">
                            <div class="row">
                              <div class="col-sm-12 mar10-bot">
                                <img class="img-fw" src="img/coop-mode.JPG"/>
                              </div>
                            </div>
                            <li class="mar20-top">
                              <h3 class="text-lblue">2 Player Cooperative</h3>
                              <p>
                                Work together to simultaneously solve puzzles across twenty unique levels not found in the main story. Cast powerful spells and tackle tricky challenges one player couldn't handle alone.
                              </p>
                            </li>
                            <li class="mar20-top">
                              <h3 class="text-lblue">2 Player Competitive</h3>
                              <p>
                                Players race to complete the same set of puzzles, using spells defensively to solve the puzzles or offensively to thwart the opponent.
                              </p>
                            </li>
                            <li class="mar20-top">
                                <h3 class="text-lblue mar10-bot">1-4 Player Versus</h3>
                                <img class="img-fw" src="img/vs-mode-mockup-01.png"/>
                            </li>
                          </ul>
                        </div>
                      </div><!-- END: Content -->
                    </div>
                  <!-- END: Local Multiplayer -->

                  <!-- Switch Specific Functionality -->
                    <div class="card">
                      <!-- Button -->
                      <div class="card-header" id="switch-specific-functionality">
                        <h5 class="">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#switch-specific-functionality-content" aria-expanded="false" aria-controls="collapseThree">
                            <h3 class="text-white">Switch Specific Functionality</h3>
                          </button>
                        </h5>
                        <div class="downarrow"></div>
                      </div><!-- END: Button -->
                      <!-- Content -->
                      <div id="switch-specific-functionality-content" class="collapse" aria-labelledby="switch-specific-functionality" data-parent="#gameplay-accordion">
                        <div class="card-body">
                          <ul class="disc">
                            <li class="mar20-top">
                              <p>
                                <i class="text-lblue">Arcanist</i> is suitable for cross-platform publication and is uniquely positioned to fill a need for immersive puzzle games beyond Tetris in the Nintendo Switch e-shop. At present, only two prominent puzzle-based experiences with multiplayer components are available on the Switch platform (Puyo Puyo Tetris and Sushi Strikers). Arcanist combines a compelling single-player story experience with multiple local multiplayer modes to provide significantly more value to the consumer than similar puzzle games.
                              </p>
                            </li>
                            <div class="col-sm-8 offset-sm-2 mar20-top">
                              <img class="img-fw" src="img/joycon-mode-01.png"/>  
                            </div>
                            <li class="mar10-top">
                              <h3 class="text-lblue">Joycon Mode</h3>
                              <p>
                                Let the Joycon be your instrument as you discover the mysteries of the Arcane, or join with up to 3 friends for cooperative or competitive action.
                              </p>
                            </li>
                            <div class="col-sm-8 offset-sm-2 mar20-top">
                              <img class="img-fw tabletmode" src="img/tablet-mode-01.png"/>  
                            </div>
                            <li class="mar10-top">
                              <h3 class="text-lblue">Touch Mode</h3>
                              <p>
                                Players on the go can take full advantage of the Switch's touchscreen capabilities for a heart racing experience -- even in airplane mode.
                              </p>
                            </li>
                          </ul>
                        </div>
                      </div><!-- END: Content -->
                    </div>
                    <!-- END: Switch Specific Functionality -->
                </div>
                <!-- END: Accordion -->
            </div>
          </div>
        <div class="rt"></div>
        <div class="bl"></div><div class="bt"></div><div class="br"></div>
      </div>
    </div>
    <!-- END: Details -->

    <!-- Media -->
    <div class="row mar20-top">
      <div class="ninebox">
        <div class="tl"></div><div class="tt"></div><div class="tr"></div>
        <div class="lt"></div>
          <div class="mt">
            <div class="row">
              <h1 class="text-gold">Media</h1>
            </div>
            <div class="row">
              <h3 class="text-lblue mar10-bot">Images</h3>
              <div class="row">
                <div class="col-sm-6">
                  <img class="img-fw" src="img/gifs/tower.gif"/>
                </div>
                <div class="col-sm-6">
                  <img class="img-fw" src="img/gifs/bookshelf.gif"/>
                </div>
              </div>
            </div>
            <div class="row mar20-top">
              <h3 class="text-lblue">Music</h3>
              <div class="row mar10-top">
                <iframe width="100%" height="75" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/474419622&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
              </div>
              <div class="row mar10-top">
                <iframe width="100%" height="75" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/474422412&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
              </div>
              <div class="row mar10-top">
                <iframe width="100%" height="75" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/474427236&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
              </div>
            </div>
          </div>
        <div class="rt"></div>
        <div class="bl"></div><div class="bt"></div><div class="br"></div>
      </div>
    </div>
    <!-- END: Media -->

    <!-- Release Roadmap -->
    <div class="row mar20-top">
      <div class="ninebox">
        <div class="tl"></div><div class="tt"></div><div class="tr"></div>
        <div class="lt"></div>
          <div class="mt">
            <div class="row">
              <h1 class="text-gold animate-text-even">Roadmap</h1>
            </div>
            <div class="row">
              <ul class="disc">
                <li class="mar20-top">
                  <h3 class="text-lblue">Production</h3>
                  <p>Present through May 2019</p>
                </li>
                <li class="mar20-top">
                  <h3 class="text-lblue">Polish and QA</h3>
                  <p>June-August 2019</p>
                </li>
                <li class="mar20-top">
                  <h3 class="text-lblue">Publicity</h3>
                  <p>Beginning June 2019 with potential announcement at or around E3</p>
                </li>
                <li class="mar20-top">
                  <h3 class="text-lblue">Initial launch</h3>
                  <p>August 2019 on Switch, PC, and Mac</p>
                </li>
                <li class="mar20-top">
                  <h3 class="text-lblue">Release on Xbox and PlayStation</h3>
                  <p>Late 2019</p>
                </li>
                <li class="mar20-top">
                  <h3 class="text-lblue">Release on iOS and Android: 2020+</h3>
                  <p>Pending publisher input</p>
                </li>
                <li class="mar20-top">
                  <h3 class="text-lblue">Target Release Price</h3>
                  <p>$15.99</p>
                </li>
                <li class="mar20-top">
                  <h3 class="text-lblue">Switch Competition</h3>
                  <p>Similar Puzzle Games</p>
                  <ul class="disc">
                    <li><p>Poyu Poyu Tetris - $39.99 (single- and multi-player modes)</p></li>
                    <li><p>Sushi Striker: The Way of Sushido - $49.99 (single- and multi-player modes)</p></li>
                    <li><p>Battle Chef Brigade - $19.99 (single-player only)</p></li>
                    <li><p>Tricky Towers - $15.99 (online and local multi-player focused)</p></li>
                    <li><p>Tumblestone - $14.99 (multi-player focused)</p></li>
                    <li><p>Letter Quest: Remastered - $11.99 (single-player only)</p></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        <div class="rt"></div>
        <div class="bl"></div><div class="bt"></div><div class="br"></div>
      </div>
    </div>
    <!-- END: Release Roadmap -->

    <!-- Publisher Needs -->
    <div class="row mar20-top">
      <div class="ninebox">
        <div class="tl"></div><div class="tt"></div><div class="tr"></div>
        <div class="lt"></div>
          <div class="mt">
            <div class="row">
              <h1 class="text-gold animate-text-odd">Publisher Needs</h1>
            </div>

            <!-- Already Have -->
            <div class="row pn-section">
              <div class="row">
                <div class="row"><h3 class="text-white">Already Have</h3></div>
                <div class="row"><p class="text-white text-small">( funded by Studio Z )</p></div>  
              </div>
              <div class="hr mar10-top mar10-bot"></div>
              <div class="row">
                <ul class="disc">
                  <li>
                    <h4 class="text-lblue">Asset Creation</h4>
                    <li>
						<p class="text-white">Creation of existing art, music, UI, design, code and other assets</p>
					</li>
					<li>
						<p class="text-white">Built in Unity</p>
					</li>
					<li>
						<p class="text-white">Utilizes FMOD audio library</p>
					</li>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Development Kits</h4>
                    <p class="text-white">Means for development on iOS and Android</p>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">QA</h4>
                    <ul class="disc">
                      <li>
                        <p class="text-white">Ongoing internal team testing</p>
                      </li>
                      <li>
                        <p class="text-white">Extended network of potential testers</p>
                      </li>
                    </ul>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Platform Access</h4>
                    <p class="text-white">Access to iOS and Android</p>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Legal / Compliance</h4>  
                    <p class="text-white">Trademark of <i class="text-lblue">Arcanist</i> ( currently pending approval )</p>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Branding and Marketing</h4>  
                    <ul class="disc">
                      <li>
                        <p class="text-white">Web development</p>
                      </li>
                      <li>
                        <p class="text-white">Web hosting and domain management</p>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- END: Already Have -->

            <!-- Initial Needs -->
            <div class="row mar20-top pn-section">
              <div class="row">
                <div class="row"><h3 class="text-white">Initial Needs</h3></div>
              </div>
              <div class="hr mar10-top mar10-bot"></div>
              <div class="row">
                <ul class="disc">
                  <li>
                    <h4 class="text-lblue">Asset Creation</h4>
                    <p class="text-white">Additional art asset development exceeding current budget at negotiated rate of $10/hr for 300 hours. <span class="text-bold text-lblue">$3,000</span></p>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Development Kits</h4>
                    <p class="text-white">Access to or funding for Nintendo Switch dev kit. <span class="text-bold text-lblue">$450</span></p>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">QA</h4>
                    <ul class="disc">
                      <li>
                        <p class="text-white">Expertise finding suitable external QA firm</p>
                      </li>
                      <li>
                        <p class="text-white">Funding for focused testing near the end of development for focused testing <span class="text-bold text-lblue">$10,000</span></p>
                      </li>
                    </ul>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Platform Access</h4>
                    <p class="text-white">Access to Nintendo Switch and Steam</p>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Content Rating</h4>
                    <ul class="disc">
                      <li>
                        <p class="text-white">ESRB for Switch release <span class="text-bold text-lblue">Free</span></p>
                      </li>
                      <li>
                        <p class="text-white">PEGI for Switch release <span class="text-bold text-lblue">$600</span></p>
                      </li>
                    </ul>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Certification</h4>
                    <p class="text-white">Assistance with certification process for Switch and any related fees <span class="text-bold text-lblue">TBD</span></p>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Localization</h4>
                    <ul class="disc">
                      <li>
                        <p class="text-white">Recommendation of trusted localization firms</p>
                      </li>
                      <li>
                        <p class="text-white">Funding for initial localization in French, Italian and Spanish <span class="text-bold text-lblue">$750</span></p>
                      </li>
                    </ul>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Legal / Compliance</h4>
                    <p class="text-white">Help ensuring compliance with all applicable laws and regulations, e.g. platform and app store terms and conditions</p>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Branding and Marketing</h4>
                    <ul class="disc">
                      <li>
                        <p class="text-white">Expertise in branding and marketing</p>
                      </li>
                      <li>
                        <p class="text-white">Development of social media campaign (Twitter, Facebook)</p>
                      </li>
                      <li>
                        <p class="text-white">Access to influencers (YouTube, Twitch)</p>
                      </li>
                      <li>
                        <p class="text-white">Trade show presence (PAX, GDC)</p>
                      </li>
                      <li>
                        <p class="text-white">Press contacts <span class="text-bold text-lblue">TBD</span></p>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- END: Initial Needs -->

            <!-- Future Needs -->
            <div class="row mar20-top pn-section">
              <div class="row">
                <div class="row"><h3 class="text-white">Future Needs</h3></div> 
              </div>
              <div class="hr mar10-top mar10-bot"></div>
              <div class="row">
                <ul class="disc">
                  <li>
                    <h4 class="text-lblue">Development Kits</h4>
                    <p class="text-white">Access to or funding for XBox and PlayStation dev kits <span class="text-bold text-lblue">$2700</span></p>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Platform Access</h4>
                    <p class="text-white">Access to Sony and Microsoft platforms</p>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Content Rating</h4>
                    <ul class="disc">
                      <li>
                      <p class="text-white">ESRB for XBox / PlayStation release <span class="text-bold text-lblue">Free</span></p>
                      </li>
                      <li>
                        <p class="text-white">PEGI for XBox / PlayStation Release <span class="text-bold text-lblue">$1200</span></p>
                      </li>
                    </ul>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Certification</h4>
                    <p class="text-white">Assistance with certification process for XBox/PlayStation and any related fees <span class="text-bold text-lblue">TBD</span></p>
                  </li>
                  <li class="mar10-top">
                    <h4 class="text-lblue">Localization</h4>
                    <ul class="disc">
                      <li>
                      <p class="text-white">Localization strategy and support</p>
                      </li>
                      <li>
                        <p class="text-white">Suggestions for additional languages to target potential audiences</p>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- END: Future Needs -->

          </div>
        <div class="rt"></div>
        <div class="bl"></div><div class="bt"></div><div class="br"></div>
      </div>
    </div>
    <!-- END: Publisher Needs -->

    <!-- Bios -->
    <div class="row mar20-top">
      <div class="ninebox">
        <div class="tl"></div><div class="tt"></div><div class="tr"></div>
        <div class="lt"></div>
          <div class="mt">
            <div class="row">
              <h1 class="text-gold animate-text-even">Developer Bios</h1>
            </div>
            <div class="row mar10-top mar20-bot">
              <p class="text-white">
              <span class="text-lblue">Studio Z</span> is a small team of artists and game developers with a combined 20+ years of experience in the AAA, educational, and indie spaces. When we're not playing hockey, writing musicals, rock climbing, or raising our fur babies, we aspire to create something unique and fun to give back to the gaming community we love.
              </p>
            </div>
            <div class="row">
              <!-- Accordion -->
              <div class="accordion" id="bios-accordion">
                  <!-- Mattie Burkert -->
                    <div class="card">
                      <!-- Button -->
                      <div class="card-header" id="mattie">
                        <h5 class="">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#mattie-content" aria-expanded="true" aria-controls="collapseOne">
                            <h3 class="text-white">Mattie Burkert</h3>
                          </button>
                        </h5>
                        <div class="downarrow"></div>
                      </div><!-- END: Button -->
                      <!-- Content -->
                      <div id="mattie-content" class="collapse" aria-labelledby="mattie" data-parent="#bios-accordion">
                        <div class="card-body">
                          <p>
                            <span class="text-lblue">Mattie Burkert</span> is a writer and producer who holds a PhD in English from the University of Wisconsin, where she was a Research Assistant for a data visualization project supported by a $1 million grant from the Mellon Foundation. She currently researches and teaches literature in a university setting and is the Project Director for an open-source web database of theater performances in London, funded by the National Endowment for the Humanities. In addition, she serves on the advisory board for a role-playing game about Shakespeare's A Midsummer Night's Dream for high school students, currently in development by an independent games-for-impact studio.
                          </p>

                          <div class="hr mar10-top mar10-bot"></div>
                          
                          <h5 class="text-lblue">
                            <a href="https://mattieburkert.com/" target="_blank">mattieburkert.com</a>
                          </h5>
                          <h5 class="text-lblue">
                            <a href="https://twitter.com/mattie_burkert" target="_blank">@mattie_burkert</a>
                          </h5>
                        </div>
                      </div><!-- END: Content -->
                    </div>
                  <!-- END: Quinn Elmer -->
                  <!-- Quinn Elmer -->
                    <div class="card">
                      <!-- Button -->
                      <div class="card-header" id="quinn">
                        <h5 class="">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#quinn-content" aria-expanded="true" aria-controls="collapseOne">
                            <h3 class="text-white">Quinn Elmer</h3>
                          </button>
                        </h5>
                        <div class="downarrow"></div>
                      </div><!-- END: Button -->
                      <!-- Content -->
                      <div id="quinn-content" class="collapse" aria-labelledby="quinnr" data-parent="#bios-accordion">
                        <div class="card-body">
                          <p>
                            <span class="text-lblue">Quinn Elmer</span> is a composer, writer, and producer. Previously, he has worked on several independent and educational video games, including At Play in the Cosmos, which won the People's Choice Award at the 2017 Games for Change conference. He is currently a student in the Technology, Innovation, and Education program in the Harvard Graduate School of Education, where he continues his game-making pursuits in both the commercial and educational worlds.
                          </p>

                          <div class="hr mar10-top mar10-bot"></div>
                          
                          <h5 class="text-lblue">
                            <a href="https://soundcloud.com/mighty_quinn" target="_blank">Quinn on Soundcloud</a>
                          </h5>
                          <h5 class="text-lblue">
                            <a href="https://twitter.com/Quinn_Elmer" target="_blank">@Quinn_Elmer</a>
                          </h5>
                        </div>
                      </div><!-- END: Content -->
                    </div>
                  <!-- END: Quinn Elmer -->
                  <!-- Chase Goostree -->
                    <div class="card">
                      <!-- Button -->
                      <div class="card-header" id="chase">
                        <h5 class="">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#chase-content" aria-expanded="false" aria-controls="collapseTwo">
                            <h3 class="text-white">Chase Goostree</h3>
                          </button>
                        </h5>
                        <div class="downarrow"></div>
                      </div><!-- END: Button -->
                      <!-- Content -->
                      <div id="chase-content" class="collapse" aria-labelledby="chase" data-parent="#bios-accordion">
                        <div class="card-body">
                            <p>
                              <span class="text-lblue">Chase Goostree</span> is an illustrator, concept artist, and 2D artist. Though he has only been dabbling in pixels for a little while, Chase Goostree has been drawing his whole life. Visions of spider-like men, fighting turtles and super-suited earthworms fueled his imagination from a young age. So far, his journey has led him to college where he studied Illustration, and he now works in freelance artistry.  He also enjoys pug dogs.
                            </p>
                        </div>
                      </div><!-- END: Content -->
                    </div>
                  <!-- END: Chase Goostree -->
                  <!-- John Karczewski -->
                    <div class="card">
                      <!-- Button -->
                      <div class="card-header" id="john">
                        <h5 class="">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#john-content" aria-expanded="false" aria-controls="collapseThree">
                            <h3 class="text-white">John Karczewski</h3>
                          </button>
                        </h5>
                        <div class="downarrow"></div>
                      </div><!-- END: Button -->
                      <!-- Content -->
                      <div id="john-content" class="collapse" aria-labelledby="john" data-parent="#bios-accordion">
                        <div class="card-body">
                          <p>
                            <span class="text-lblue">John Karczewski</span> is a game designer and software engineer who has shipped over a dozen titles in his nine-year career. He got his start developing award-winning gameplay for AAA titles like Saint's Row: The Third and Red Faction: Armageddon; today, he creates educational games in partnership with researchers and non-profit organizations, including innovative projects supported by the National Institutes for Health and the Gates Foundation. Whether he's developing games for change or working on his own indie titles, he loves creating polished experiences that captivate players.
                        </p>

                        <div class="hr mar10-top mar10-bot"></div>
                        
                        <h5 class="text-lblue">
                          <a href="http://www.johnkarczewski.com/" target="_blank">johnkarczewski.com</a>
                        </h5>
                        <h5 class="text-lblue">
                          <a href="https://twitter.com/johnkarczewski" target="_blank">@johnkarczewski</a>
                        </h5>
                        </div>
                      </div><!-- END: Content -->
                    </div>
                    <!-- END: John Karczewski -->
                  <!-- Jake Ruesch -->
                    <div class="card">
                      <!-- Button -->
                      <div class="card-header" id="jake">
                        <h5 class="">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#jake-content" aria-expanded="false" aria-controls="collapseThree">
                            <h3 class="text-white">Jake Ruesch</h3>
                          </button>
                        </h5>
                        <div class="downarrow"></div>
                      </div><!-- END: Button -->
                      <!-- Content -->
                      <div id="jake-content" class="collapse" aria-labelledby="jake" data-parent="#bios-accordion">
                        <div class="card-body">
                          <p>
                            <span class="text-lblue">Jake Ruesch</span> is a UI/UX and web designer who holds a degree in graphic design and has worked in video game development for nearly a decade.  As a team member at the University of Wisconsin-Madison, Learning Games Network, The Wisconsin Institutes for Discovery, and Gear Learning, he has collaborated with programmers, modelers, and animators to create fun, and intuitive games for impact.  He loves a challenge, whether it's designing responsive, user-friendly, intuitive websites; developing game interfaces and graphics; or creating high-detail vector art and video games.
                          </p>

                          <div class="hr mar10-top mar10-bot"></div>
                          
                          <h5 class="text-lblue">
                            <a href="http://jsruesch.com" target="_blank">jsruesch.com</a>
                          </h5>
                          <h5 class="text-lblue">
                            <a href="https://twitter.com/Rykore" target="_blank">@Rykore</a>
                          </h5>
                        </div>
                      </div><!-- END: Content -->
                    </div>
                    <!-- END: Jake Ruesch-->
                </div>
                <!-- END: Accordion -->
            </div>
          </div>
        <div class="rt"></div>
        <div class="bl"></div><div class="bt"></div><div class="br"></div>
      </div>
    </div>
    <!-- END: Bios -->
  </div><!-- /.container -->
</div><!-- /.container-fluid -->

<div class="row footer">
  <img class="footer-logo center-block" src="img/studioz-logo-01.svg"/>
</div>

 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123360570-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123360570-1');
</script>

</body>
</html>
