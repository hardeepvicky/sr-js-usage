Country : 
<select id="country" class="my-cascade" data-sr-cascade-target="#state" 
        data-sr-cascade-url="states.php?country_id={v}">
    <option value="">Please Select</option>
    <option value="1" selected="true">India</option>
    <option value="2">USA</option>
</select>

<br/>
State : 
<select id="state" class="my-cascade" data-sr-cascade-target="#city" 
        data-sr-cascade-url="cities.php?state_id={v}" data-sr-cascade-value="1">
</select>

<br/>
City : <select id="city" data-sr-cascade-value="1">
</select>