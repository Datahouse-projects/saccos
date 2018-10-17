<div class="col-md-3">
    <div class="card">
        <div class="card-header">System Menu</div>
        <div>
            <ul style="list-style: none; margin-left: -40px;">
                <li class="@if(Route::currentRouteName() == 'saccos.organizations.management')li-bg @else @endif"><a  style="text-decoration: none; color: grey;" href="{{route('saccos.organizations.management')}}" class="@if(Route::currentRouteName() == 'saccos.organizations.management') a-active @else @endif"><small><b>-</b> Saccos Organizations</small></a></li>
                <li class="@if(Route::currentRouteName() == 'saccos.organizations.departments')li-bg @else @endif"><a href="{{route('saccos.organizations.departments')}}" class="@if(Route::currentRouteName() == 'saccos.organizations.departments') a-active @else @endif" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Organization Departments</small></a></li>
                <li class="@if(Route::currentRouteName() == 'saccos.loans.management')li-bg @else @endif"><a href="{{route('saccos.loans.management')}}" class="@if(Route::currentRouteName() == 'saccos.loans.management') a-active @else @endif" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Loans Management</small></a></li>
                <li class="@if(Route::currentRouteName() == 'saccos.members.managements')li-bg @else @endif"><a  class="@if(Route::currentRouteName() == 'saccos.members.managements') a-active @else @endif" href="{{route('saccos.members.managements')}}"  style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Members Management</small></a></li>
                <li><a href="#" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Contributions and  Payments</small></a></li>
                <li><a href="#" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Salaries Management</small></a></li>
                <li><a href="#" style="text-decoration: none; color: grey;"><small><b>-</b> Saccos Shares Management</small></a></li>
                <li><a href="#" style="text-decoration: none; color: grey;"><small><b>-</b> System Users Accounts Management</small></a></li>
            </ul>
        </div>
    </div>
</div>