            <div class="footer">
                <?php echo 'Aquill '.AQUILL_VERSION.'.'; ?><br>
                <?php echo exec_time(); ?> <?php echo memory_usage(); ?>
            </div> 
        </div>
    </div>
<?php echo Asset::container('footer')->scripts(); ?>
</body>
</html>