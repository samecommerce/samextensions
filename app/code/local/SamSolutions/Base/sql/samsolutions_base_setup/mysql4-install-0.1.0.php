<?php
$installer = $this;
$installer->startSetup();

$content = <<<EOT
<div class="footer-in">
    <ul class="bottom-nav">
        <li class="menu-item">
            <a href="/article/company">
                Company
            </a>
            <ul class="sub-menu social-icons">
                <li><a href="https://www.facebook.com/SaM.Ecommerce"><img src="http://sam-extensions.com/skin/frontend/sam-extensions/sam-extensions/images/facebook.png"></a></li>
                <li><a href="https://plus.google.com/u/0/b/109602300109580324481/109602300109580324481/posts"><img src="http://sam-extensions.com/skin/frontend/sam-extensions/sam-extensions/images/Google-plus-icon.png"></a></li>
                <li><a href="https://twitter.com/Sam_ecommerce"><img src="http://sam-extensions.com/skin/frontend/sam-extensions/sam-extensions/images/twitter.png"></a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="/success">
                Successes                </a>
        </li>
        <li class="parent menu-item">
            <a href="/article/magento-development">Magento Services</a>
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="/article/magento-development#magento-consulting">
                        Magento Consulting                            </a>
                </li>
                <li class="menu-item">
                    <a href="/article/magento-development#magento-development">
                        Magento Development                            </a>
                </li>
                <li class="menu-item">
                    <a href="/article/magento-development#magento-marketing">
                        Magento Marketing                            </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="/article/wordpress-development">
                WordPress                </a>
        </li>
        <li class="menu-item">
            <a href="/article/drupal">
                Drupal                </a>
        </li>
        <li class="menu-item">
            <a href="/article/hire-developer">
                Hire Developer                </a>
        </li>
        <li class="menu-item">
            <a href="/blog">
                Blog                </a>
        </li>
        <li class="menu-item">
            <a href="/contact-us">
                Contact Us                </a>
        </li>
    </ul>
</div>
EOT;
$data = array(
    'content' => $content
);

updateBlock('footer_links', $content);


$content = <<<EOT
    <a class="skip-link skip-nav" href="#">
        <span class="icon"></span>
        <span class="label">Menu</span>
    </a>
    <a class="skip-link skip-search" href="#">
        <span class="icon"></span>
        <span class="label">Search</span>
    </a>
    <a class="skip-link skip-account" href="#">
        <span class="icon"></span>
        <span class="label">My account</span>
    </a>
    <a class="skip-link skip-checkout" href="#">
        <span class="icon"></span>
        <span class="label">Support</span>
    </a>
    <a class="skip-link skip-cart" href="#">
        <span class="icon"></span>
        <span class="label">My Cart</span>
    </a>
    <a class="skip-link skip-login" href="#">
        <span class="icon"></span>
        <span class="label">Log in</span>
    </a>
EOT;
$data = array(
    'content'   => $content,
    'title'     => 'Header Links',
    'identifier'=> 'header_links',
    'stores'    => array(0),
    'is_active' => 1,
);

createBlock($data);

$content = <<<EOT
    <ul class="nav_in">
        <li>
            <a href="#">Back to SaM Ecommerce</a>
        </li>
        <li>
            <a href="#">Magento Extensions</a>
        </li>
        <li>
            <a href="#">Magento Development</a>
        </li>
        <li>
            <a href="#">Magento Services</a>
        </li>
        <li>
            <a href="#">Magento Support</a>
        </li>
        <li>
            <a href="#">Magento Design</a>
        </li>
    </ul>
EOT;
$data = array(
    'content'   => $content,
    'title'     => 'Header Navigation',
    'identifier'=> 'header_nav',
    'stores'    => array(0),
    'is_active' => 1,
);

createBlock($data);

$installer->endSetup();


function updateBlock($blockIdentifier, $content){
    if($block = Mage::getModel('cms/block')->load($blockIdentifier)){
        $data = $block->getData();
        $data['content'] = $content;
        $block->setData(
            $data
        )->save();
    }
}

function createBlock($data){
    if(!Mage::getModel('cms/block')->load($data['identifier'])->getId()){

        Mage::getModel('cms/block')->setData($data)->save();
    }
}