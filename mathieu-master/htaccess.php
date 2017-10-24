<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond $1 !^(index.php|public|robot.txt)
    RewriteRule ^(.*)$ index.php [L]
</IfModule>

<IfModule !mod_rewrite.c>
    # If we don't have mod_rewrite installed, all 404's
    # can be sent to index.php, and everything works as normal.
    ErrorDocument 404 /index.php
</IfModule>
