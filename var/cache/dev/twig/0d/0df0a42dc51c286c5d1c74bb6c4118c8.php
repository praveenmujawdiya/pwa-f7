<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @SurvosDeployment/nginx.conf.twig */
class __TwigTemplate_9d99bd92408b8e58e0ce2bd9e982e4d5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_ba1c37b184061724dbe82aef62fe32a3 = $this->extensions["Inspector\\Symfony\\Bundle\\Twig\\TwigTracer"];
        $__internal_ba1c37b184061724dbe82aef62fe32a3->enter($__internal_ba1c37b184061724dbe82aef62fe32a3_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosDeployment/nginx.conf.twig"));

        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosDeployment/nginx.conf.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosDeployment/nginx.conf.twig"));

        // line 1
        yield "add_header X-Frame-Options \"SAMEORIGIN\";
add_header X-XSS-Protection \"1; mode=block\";
add_header X-Content-Type-Options \"nosniff\";

index  index.php index.html index.htm;

charset utf-8;

gzip on;
gzip_comp_level 5;
gzip_min_length 256;
gzip_proxied any;
gzip_vary on;
gzip_types
  application/atom+xml
  application/javascript
  application/json
  application/ld+json
  application/manifest+json
  application/rss+xml
  application/vnd.geo+json
  application/vnd.ms-fontobject
  application/x-font-ttf
  application/x-web-app-manifest+json
  application/xhtml+xml
  application/xml
  font/opentype
  image/bmp
  image/svg+xml
  image/x-icon
  text/cache-manifest
  text/css
  text/plain
  text/vcard
  text/vnd.rim.location.xloc
  text/vtt
  text/x-component
  text/x-cross-domain-policy;

#
#if (\$http_x_forwarded_proto != \"https\") {
#  return 301 https://\$host\$request_uri;
#}

# see https://medium.freecodecamp.org/how-you-can-host-multiple-domain-names-and-projects-in-one-vps-7aed4f56e7a1
location / {
    try_files \$uri \$uri/ /index.php?\$query_string;

    fastcgi_param SCRIPT_FILENAME \$realpath_root\$fastcgi_script_name;
    fastcgi_param DOCUMENT_ROOT \$realpath_root;

    if (\$request_uri ~* \".(ico|css|js|gif|jpe?g|png)\$\") {
                                            expires 3d;
                                            access_log off;
                                            add_header Pragma public;
                                            add_header Cache-Control \"public\";
                                            break;
                                    }

}

location = /icons/favicon.ico { access_log off; log_not_found off; }
location = /robots.txt  { access_log off; log_not_found off; }

error_page 404 /index.php;


location ~ /\\.(?!well-known).* {
    deny all;
}
";
        
        $__internal_ba1c37b184061724dbe82aef62fe32a3->leave($__internal_ba1c37b184061724dbe82aef62fe32a3_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@SurvosDeployment/nginx.conf.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("add_header X-Frame-Options \"SAMEORIGIN\";
add_header X-XSS-Protection \"1; mode=block\";
add_header X-Content-Type-Options \"nosniff\";

index  index.php index.html index.htm;

charset utf-8;

gzip on;
gzip_comp_level 5;
gzip_min_length 256;
gzip_proxied any;
gzip_vary on;
gzip_types
  application/atom+xml
  application/javascript
  application/json
  application/ld+json
  application/manifest+json
  application/rss+xml
  application/vnd.geo+json
  application/vnd.ms-fontobject
  application/x-font-ttf
  application/x-web-app-manifest+json
  application/xhtml+xml
  application/xml
  font/opentype
  image/bmp
  image/svg+xml
  image/x-icon
  text/cache-manifest
  text/css
  text/plain
  text/vcard
  text/vnd.rim.location.xloc
  text/vtt
  text/x-component
  text/x-cross-domain-policy;

#
#if (\$http_x_forwarded_proto != \"https\") {
#  return 301 https://\$host\$request_uri;
#}

# see https://medium.freecodecamp.org/how-you-can-host-multiple-domain-names-and-projects-in-one-vps-7aed4f56e7a1
location / {
    try_files \$uri \$uri/ /index.php?\$query_string;

    fastcgi_param SCRIPT_FILENAME \$realpath_root\$fastcgi_script_name;
    fastcgi_param DOCUMENT_ROOT \$realpath_root;

    if (\$request_uri ~* \".(ico|css|js|gif|jpe?g|png)\$\") {
                                            expires 3d;
                                            access_log off;
                                            add_header Pragma public;
                                            add_header Cache-Control \"public\";
                                            break;
                                    }

}

location = /icons/favicon.ico { access_log off; log_not_found off; }
location = /robots.txt  { access_log off; log_not_found off; }

error_page 404 /index.php;


location ~ /\\.(?!well-known).* {
    deny all;
}
", "@SurvosDeployment/nginx.conf.twig", "/Users/praveenmujawdiya/Documents/survos/pwa-f7/vendor/survos/deployment-bundle/templates/nginx.conf.twig");
    }
}
