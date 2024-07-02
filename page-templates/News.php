<?php 
//Template Name: News
get_header(); ?>

<?php
            session_start();
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbName = "AlliedMedix_db";

            $conn = new mysqli($servername, $username, $password, $dbName);

            $newsandevents = [];
            $neQuery = "SELECT * FROM NewsAndEvents where Type = 'News'";
            $neResult = mysqli_query($conn, $neQuery);
            
            while ($row = mysqli_fetch_assoc($neResult)) {
                $newsandevents[] = $row;
            }

    ?>
       <section class="services"  style="padding: 10px 0;">
       
       <h3 style="text-align: center; vertical-align: top;">News</h3>
       
        <div class="container">
            <table style="border-spacing: 0px 20px; ">
            
                    <?php foreach ($newsandevents as $type) {  ?> <tr>
                    <td style="text-align: left; vertical-align: top;"><font size="4px"><b><?php echo $type['CreateDate']; ?></b></font><br><br>
                        <a href="#" class="neimages">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $type['ImageLink']; ?>">
                        </a>
                    </td>
                     <td style="text-align: left; vertical-align: top;"><font size="4px"><b><?php echo $type['Title']; ?></b></font><br><br><?php echo $type['Description'];?> </td></tr>
                    <?php } ?>
            </table>
            
        </div>
        </section>

<?php get_footer(); ?>