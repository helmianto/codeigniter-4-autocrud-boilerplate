<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <?php
        $request = service('request');
        ?>
        <li class="nav-item">
            <a href="<?= site_url('/') ?>" class="nav-link <?= !$request->uri->getSegment(1) ? 'active' : null; ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= site_url('/users') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'users' ? 'active' : null; ?>">
                <i class="nav-icon fas fa-users"></i>
                <p>Users</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= site_url('/projects') ?>" class="nav-link <?= $request->uri->getSegment(1) == 'projects' ? 'active' : null; ?>">
                <i class="nav-icon fas fa-plus"></i>
                <p>Projects</p>
            </a>
        </li>
    </ul>
</nav>
