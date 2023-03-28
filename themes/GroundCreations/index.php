<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package StarterTheme
 */

get_header();
?>

	<div id="primary" class="content-area">
        
        <div class="swiper-container">
            <div class="hero-content-static">
                <h1>Create your custom <br><span>outdoor oasis</span></h1>
                <div class="divider white-divider left-divider"></div>
                <h2>Residential landscape design focused on your needs, requests, and site requirements.</h2>
                <div class="btn-holder">
                    <a href="#contact" class="cta-btn page-scroll">Contact Us <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-slide-5">
                </div>
                <div class="swiper-slide hero-slide-1">
                </div>
                <div class="swiper-slide hero-slide-2">
                </div>
                <div class="swiper-slide hero-slide-4">
                </div>
            </div>
            <img class="hero-icon-bg" src="/assets/GroundCreations-Logo-Faded.png" alt="Ground Creations Logo Fade">
            <div class="swiper-pagination"></div>
        </div>
        
        
        <div class="home-blog" id="tom-schuetz">   
            <div class="image-section">
                <img src="/assets/Tom-Schuetz-GroundCreations.jpg" alt="Tom Schuetz Ground Creations" /> 
                <div class="item">
                    <h2>Tom Schuetz</h2>
                    <h3>Landscape Designer</h3>
                    <div class="divider green-divider left-divider"></div>
                    <p>Tom was born and raised in the Chicago Metropolitan area and currently resides in Erie, CO. After studying Landscape Architecture at Purdue University and making his home in a variety of climates; Chicago, Southern California, Atlanta and Colorado, he has a unique view on residential landscape design. Having also traveled extensively through Asia, Europe, Australia and New Zealand, he is able to draw inspiration from his diverse experiences.</p>
                </div> 
            </div>
        </div>
            
            
            <div class="design-focus-wrap" id="design-focus">
                <div class="subtitle-wrap">
                    <h2>Design Focus</h2>
                    <div class="divider green-divider"></div>
                </div>
                <div class="design-focus-bg">
                    <div class="design-focus">
                        <div class="focus-left">
                            <div class="focus-item">
                                <img src="/assets/cactus.svg" alt="Drought Tolerant Plants Icon" />
                                <p>Drought Tolerant Plants</p>
                            </div>
                            <div class="focus-item">
                                <img src="/assets/fountain.svg" alt=" Water Feature Designs Icon" />
                                <p>Water Feature Designs for Small Spaces</p>
                            </div>
                            <div class="focus-item">
                                <img src="/assets/trees.svg" alt="Conifers Icon"  />
                                <p>Conifers</p>
                            </div>
                            <div class="focus-item">
                                <img src="/assets/flowers.svg" alt="Perennials/Annuals/Bulbs Icon"  />
                                <p>Perennials/Annuals/Bulbs</p>
                            </div>                    
                        </div>

                        <div class="focus-middle"></div>

                        <div class="focus-right">
                            <div class="focus-item">
                                <img src="/assets/planter.svg" alt="Raised Planters for Vegetable Gardens Icon"  />
                                <p>Raised Planters for Vegetable Gardens</p>
                            </div>   
                            <div class="focus-item">
                                <img src="/assets/building.svg" alt="Urban Designs Icon"  />
                                <p>Urban Designs</p>
                            </div>     
                            <div class="focus-item">
                                <img class="patio" src="/assets/patio.svg" alt="Intimate Patio Designs Icon"  />
                                <p>Intimate Patio Designs</p>
                            </div>            
                        </div>
                    </div>      
                </div>
            </div>
        
        
        
        
            <div class="design-process-wrap" id="design-process">
                <div class="subtitle-wrap">
                    <h2>Design Process</h2>
                    <div class="divider green-divider"></div>
                </div>
                    <div class="process-flex">
                        <div class="process-item first-process-item">
                            <span>1</span>
                            <h3>Initial Meeting - Discovery</h3>
                            <ul>
                                <li>Discuss your design requirements, design influences and budget.</li>
                                <li>Nursery visit to understand client's preferences plant selection.</li>
                            </ul>
                        </div>
                        <img src="/assets/1stPathProcess.png" />                    
                    </div>
                    <div class="process-middle">          
                        <span>2</span>          
                        <div>
                            <h3>Second Meeting - Collaboration</h3>
                            <ul>
                                <li>Designer reviews the preliminary design and potential changes to meet your needs as a client.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="process-flex process-flex-last">
                        <img src="/assets/2ndPathProcess.png" />    
                        <div class="process-item">
                            <span>3</span>
                            <h3>Final Meeting - Installation Planning</h3>
                            <ul>
                                <li>Present Final Design/Rendering/ provide copies for HOA Approval.</li>
                                <li>HOA Approves Design.</li>
                                <li>Nursery visit to purchase and tag plants.</li>
                            </ul>
                        </div>                
                    </div>
                </div>
        
        
            <div class="maintenance-wrap" id="maintenance">
                <div class="subtitle-wrap">
                    <h2>Post Install Care & Maintenance Recommendations</h2>
                    <div class="divider green-divider"></div>
                    <p>A set of annual suggestions and guidelines to follow, based on your landscape design.</p>
                </div>
                <div class="maintenance">
                    <div class="maintenance-flex">
                        <div class="season spring">
                            <h4>Spring<br>(March | April | May)</h4>
                            <ul>
                                <li>Pre-emergence / Fertilize</li>
                                <li>Prune Winter Kill</li>
                            </ul>
                        </div>
                        <div class="season summer">
                            <h4>Summer<br>(June | July | August)</h4>
                            <ul>
                                <li>Mulch Planting Beds Early Summer</li>
                            </ul>
                        </div>
                    </div>
                    <div class="maintenance-flex">
                        <div class="season fall">
                            <h4>Fall<br>(September | October | November)</h4>
                            <ul>
                                <li>Additional Mulch to protect perennials and shrubs from winter</li>
                                <li>Spray “Wilt Pruf” on Evergreens / Rhododendrons (protects plants from winter winds)</li>
                            </ul>
                        </div>
                        <div class="season winter">
                            <h4>Winter<br>(December | January | February)</h4>
                            <ul>
                                <li>Snow Cover is a good thing to protect plants</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="subtitle-wrap">
                    <h2>Follow Up – 1st year</h2>
                    <p>Walk the design site with you to discuss, care challenges, winter kill and anything else necessary.</p>
                </div>
            </div>
        
        
        <div class="gallery-wrap">
            <div class="gallery-item gallery-item-9"></div>
            <div class="gallery-item gallery-item-10"></div>
            <div class="gallery-item gallery-item-11"></div>
            <div class="gallery-item gallery-item-12"></div>
            <div class="gallery-item gallery-item-1"></div>    
            <div class="gallery-item gallery-item-2"></div>
            <div class="gallery-item gallery-item-3"></div>
            <div class="gallery-item gallery-item-4"></div>
            <div class="gallery-item gallery-item-5"></div>
            <div class="gallery-item gallery-item-6"></div>
            <div class="gallery-item gallery-item-7"></div>
            <div class="gallery-item gallery-item-8"></div>    
        </div>
        
        
        
        
        
        
        
</div><!-- #primary -->

<?php
get_footer();
