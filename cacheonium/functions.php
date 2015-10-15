<?php 
/**
 * Cacheonium functions.
 *
 * 
 */

        add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
        function theme_enqueue_styles()
            {
                wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        
            }
            
            
        if ( ! function_exists( 'cachemakers_slider' ) ) :
            
            function cachemakers_slider()
                {
                    
                    
/*               
                    <div class="cachemakers cache-announcement-container">
                         <div class="cachemakers cache-slider-container-full">
                             
                             
                            <div class='cachemakers cache-slider'>
                                <div><img src='https://cache-makers-test-server-nbenoit14.c9.io/wp-includes/images/21060290884_c92d1b35bd_z.jpg' alt='test' class='cachemakers cache-slider-image'></div>
                            </div>
                            
                            
                        </div> 
                    
                    <div class="cachemakers cache-announcement-text-full">
                                 <h2>Announcements</h2>
                                 <ul>
                                     <li>Hack Day - Annual Local Hack Day This Saturday at Utah State University</li>
                                     <li>Maker Faire - Salt Lake City MakerFaire Saturday 9/10/15</li>
                                     <li>Signups - Signups for next sessions clubs ends wednesday</li>

                                 </ul>
                           </div>
                      </div>
                </div>
*/         
                      return $slider_string;
                    
                }
            
            
        endif;





?>