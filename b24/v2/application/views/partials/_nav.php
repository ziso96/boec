<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $menu_limit = $general_settings->menu_limit; ?>
<!--navigation-->
<ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
    <li class="nav-item <?php echo ($active_page == 'index' || $active_page == "") ? 'active' : ''; ?>" ">
    <a class="nav-link d-flex align-items-center" href="<?php echo lang_base_url(); ?>" >
        <i data-feather="home"></i><span><?php echo trans("home"); ?></span></a>
    </li>
    <?php
    $total_items = 1;
    $i = 1;
    foreach ($main_menu as $menu_item):
    if ($menu_item->item_location == "header"):

    if ($i < $menu_limit):
    $sub_links = get_sub_links($menu_item->item_id, $menu_item->item_type);
    if (!empty($sub_links)): ?>
    <li class="dropdown nav-item <?php echo ($active_page == $menu_item->item_slug) ? 'active' : ''; ?>" data-menu="dropdown">
        <a class="dropdown-toggle nav-link d-flex align-items-center" href="<?php echo generate_menu_item_url($menu_item); ?>" data-bs-toggle="dropdown">
            <i data-feather="circle"></i><span><?php echo html_escape($menu_item->item_name); ?></span></a>
        <ul class="dropdown-menu" data-bs-popper="none">
            <?php foreach ($sub_links as $sub_item): ?>
            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo generate_menu_item_url($sub_item); ?>" data-bs-toggle=""><i data-feather="disc"></i><span><?php echo html_escape($sub_item->item_name); ?></span></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </li>
    <?php else: ?>
    <li class="<?php echo ($active_page == $menu_item->item_slug) ? 'active' : ''; ?>" data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo generate_menu_item_url($menu_item); ?>" data-bs-toggle=""><i data-feather="circle"></i><span><?php echo html_escape($menu_item->item_name); ?></span></a>
    </li>
    <?php endif;
        $i++;
    endif;


        $total_items++;
    endif;
    endforeach; ?>

    <?php
    if ($total_items > $menu_limit): ?>
    <li class="dropdown nav-item" data-menu="dropdown">
        <a class="dropdown-toggle nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown">
            <i data-feather="circle"></i></a>
        <ul class="dropdown-menu" data-bs-popper="none">
            <?php $i = 1;
            foreach ($main_menu as $menu_item):
            if ($menu_item->item_location == "header"):
            if ($i >= $menu_limit):
            $sub_links = get_sub_links($menu_item->item_id, $menu_item->item_type);
            if (!empty($sub_links)): ?>
            <li data-menu=""><a class="dropdown-item d-flex align-items-center" href="<?php echo generate_menu_item_url($menu_item); ?>" data-bs-toggle="">
                    <i data-feather="disc"></i><span><?php echo html_escape($menu_item->item_name); ?></span></a>
                <ul class="dropdown-menu" data-bs-popper="none">
                    <?php foreach ($sub_links as $sub_item): ?>
                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
                        <a class="dropdown-item d-flex align-items-center dropdown-toggle" href="<?php echo generate_menu_item_url($sub_item); ?>" data-bs-toggle="dropdown">
                            <i data-feather="circle"></i><span><?php echo html_escape($sub_item->item_name); ?></span></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <?php else: ?>
            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu">
                <a class="dropdown-item d-flex align-items-center dropdown-toggle" href="<?php echo generate_menu_item_url($menu_item); ?>" data-bs-toggle="dropdown">
                    <i data-feather="circle"></i><span><?php echo html_escape($menu_item->item_name); ?></span></a>
            </li>
            <?php endif;
            endif;
                $i++;
            endif;
            endforeach; ?>
        </ul>
    </li>
    <?php endif; ?>
</ul>


