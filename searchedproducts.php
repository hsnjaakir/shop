<?php include 'inc/header.php' ?>
<style>
    /* .notfound {} */
    .notfound h2 {
        font: size 100px;
        line-height: 130px;
        text-align: center
    }

    .notfound h2 span {
        display: block;
        color: red;
        font-size: 170px;
    }
</style>
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Search Results</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <?php
            if (isset($_POST['submit'])) {
                $str = $_POST['search'];
                $searchedPd = $pd->searchPd($str);
                if ($searchedPd) {
                    while ($result = $searchedPd->fetch_assoc()) {
            ?>
                        <div class="grid_1_of_4 images_1_of_4">
                            <a href="details.php?proid=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
                            <h2> <?php echo $result['productName']; ?> </h2>
                            <p> <?php echo $fm->textShorten($result['body'], 60); ?> </p>
                            <p><span class="price">$<?php echo $result['price']; ?></span></p>
                            <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="main">
                        <div class="content">
                            <div class="section group">
                                <div class="notfound">
                                    <h2><span>Not Found</span> There is no such product</h2>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include 'inc/footer.php' ?>