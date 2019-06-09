<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href='{{ backpack_url('address') }}'><i class='fa fa-tag'></i> <span>Address</span></a></li>
<li><a href='{{ backpack_url('hotel') }}'><i class='fa fa-tag'></i> <span>Hotel</span></a></li>
<li><a href='{{ backpack_url('convenience') }}'><i class='fa fa-tag'></i> <span>Conveniences</span></a></li>
<li><a href='{{ backpack_url('room-type') }}'><i class='fa fa-tag'></i> <span>Room Types</span></a></li>
<li><a href='{{ backpack_url('room') }}'><i class='fa fa-tag'></i> <span>Rooms</span></a></li>
<li><a href='{{ backpack_url('event') }}'><i class='fa fa-tag'></i> <span>Events</span></a></li>
<li><a href='{{ backpack_url('order') }}'><i class='fa fa-tag'></i> <span>Orders</span></a></li>
<!-- Users, Roles Permissions -->
<li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
        <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>
<li><a href='{{ backpack_url('provide') }}'><i class='fa fa-tag'></i> <span>Provides</span></a></li>
<li><a href='{{ backpack_url('city') }}'><i class='fa fa-tag'></i> <span>Cities</span></a></li>