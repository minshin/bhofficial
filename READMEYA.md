2017年3月29日的数据库相关
浏览数表添加
php artisan plugin:migration PolloZen\\MostVisited create_visits_table.php Y （new）
--------------------------------------------------------------------------------
2017年3月28日的数据库相关
1目前用到的数据表
1）医生表
bohe_article_doctor               
bohe_doctor_posts_types  （new）         
bohe_doctor_types       （new）
2）价目详情表
bohe_article_service              
3）博客表（服务项目和薄荷百科）
rainlab_blog_categories           
rainlab_blog_posts                
rainlab_blog_posts_categories

2 建立表的命令
1）建立医生表
php artisan plugin:migration Bohe\\Article create_types_table.php Y （new）
php artisan plugin:migration Bohe\\Article create_bohe_doctor.php Y 
2)建立价目详情表
php artisan plugin:migration Bohe\\Service create_bohe_service.php Y
3)建立博客表（服务项目和薄荷百科）
php artisan plugin:migration RainLab\\Blog alter_posts_type.php Y  (new ,新增了type字段区分服务项目和薄荷百科)
php artisan plugin:migration RainLab\\Blog categories_add_nested_fields.php Y
php artisan plugin:migration RainLab\\Blog create_categories_table.php Y
php artisan plugin:migration RainLab\\Blog create_posts_table.php Y
php artisan plugin:migration RainLab\\Blog seed_all_tables.php Y
php artisan plugin:migration RainLab\\Blog update_timestamp_nullable.php Y

3更新到服务器的同学，需要将标注为（new）的命令在服务器执行
4医生表今日去掉了type字段，改为另建立表处理。更新到服务器的同学，需要重建医生表，如下：
php artisan plugin:migration Bohe\\Article create_bohe_doctor.php N  
php artisan plugin:migration Bohe\\Article create_bohe_doctor.php Y

