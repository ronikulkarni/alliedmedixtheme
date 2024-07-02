<?php 
//Template Name: Home
get_header(); ?>
<section class="hero">
        <div class="container">
            <h2>Pediatric and Geriatric Therapy Services</h2>
        </div>
    </section>
    
   <!--  <section class="services">
        <div class="container">
            <div class="service">
                <h3>What we do?</h3>
                <h3>A Few Words About Us</h3>
                <h3>Our History</h3>
                <h3>Join Us</h3>
            </div>
            <div class="service">
                <a href="#" class="homeimages">
                <img src="development-guide-png.png" alt="AlliedMedix Resources, Inc.">
                </a>
                <a href="#" class="homeimages">
                    <img src="references-png.png" alt="AlliedMedix Resources, Inc.">
                 </a>
                <a href="#" class="homeimages">
                    <img src="our-history-png.png" alt="AlliedMedix Resources, Inc.">
                </a>
                <a href="#" class="homeimages">
                    <img src="availabilities-png.png" alt="AlliedMedix Resources, Inc.">
                </a>
            </div>
        </div>
    </section> -->


    <section class="services">
        <div class="container">
            <table>
                <tr>
                    <td style='border:none;'>What We Do?</td>
                    <td style='border:none;'>A Few Words About Us</td>
                    <td style='border:none;'>Our History</td>
                    <td style='border:none;'>Join Us</td>
                    
                <tr>
                    <td style='border:none;'>
                        <a href="#" class="homeimages">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/development-guide-png.png" alt="Development Guide">
                        </a>
                    </td>
                    <td style='border:none;'>
                        <a href="#" class="homeimages">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/references-png.png" alt="References">
                        </a>
                    </td>
                    <td style='border:none;'>
                        <a href="#" class="homeimages">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/our-history-png.png" alt="Our History">
                        </a>
                    </td>
                    <td style='border:none;'>
                        <a href="#" class="homeimages">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/availabilities-png.png" alt="Availabilities">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td style='border:none;'> <font size="2">
                        AlliedMedix is a growing provider of direct services for the pediatrics to geriatric age groups nationwide. Our programs are committed to increase awareness and training to parents, families, teachers, caregivers and other involved professionals.
                    </font></td>
                    <td style='border:none;'> <font size="2">
                        We are a national therapy service provider and our clinicians work with medical as well as educational facilities throughout the U.S. More than half a decade AlliedMedix has been supporting a multitude of organizations with their therapy staffing needs.    
                    </font></td>
                    <td style='border:none;'> <font size="2">
                        AlliedMedix started as an entrepreneurial idea between a group of clinicians and a management expert in the year 2003. Soon after, the idea was nurtured and developed into an organization which started in Forest Hills Queens.
                    </font></td>
                    <td style='border:none;'> <font size="2">
                        We at AlliedMedix believe that the success of a company is deeply rooted in the satisfaction of its team. Without the support of its team a common goal of success cannot be reached. Our diverse background has made us sensitive to individualism.
                    </font></td>
                </tr>
            </table>
        </div>
    </section>
    <?php get_footer(); ?>