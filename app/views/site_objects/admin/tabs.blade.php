<div class="list-group">
    <a href="admin_dashboard" 
        class="list-group-item @if($title == 'Dashboard') active @endif">
    <i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
    <a href="admin_conversations" 
        class="list-group-item @if($title == 'Conversations') active @endif">
    <i class="fa fa-comments-o fa-fw"></i> Conversations</a>
    <a href="admin_manage_universities" 
        class="list-group-item @if($title == 'Manage Universities') active @endif">
    <i class="fa fa-gears fa-fw"></i> Manage Universities</a>
    <a href="admin_manage_alumni" 
        class="list-group-item @if($title == 'Manage Alumni') active @endif">
    <i class="fa fa-gears fa-fw"></i> Manage Alumni</a>
    <a href="admin_manage_administrators" 
        class="list-group-item @if($title == 'Manage Administrators') active @endif">
    <i class="fa fa-group fa-fw"></i> Manage Administrators</a>
    <a href="admin_statistics" 
        class="list-group-item @if($title == 'Statistics') active @endif">
    <i class="fa fa-signal fa-fw"></i> Statistics</a>
    <a href="admin_broadcasts" 
        class="list-group-item @if($title == 'Broadcasts') active @endif">
    <i class="fa fa-bell-o fa-fw"></i> Broadcasts</a>
</div>