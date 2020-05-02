<table class="sr-table-template" data-sr-table-template-min-row="2">
    <thead>
        <tr>
            <th>
                <button class="sr-table-template-add">Add</button>
            </th>
            <th>Name</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr class="sr-table-template-row hidden">
            <td>{{sr-counter}}</td>
            <td>
                <button class="sr-table-template-move-up">Move Up</button>
                <br/>
                <br/>
                <button class="sr-table-template-move-down">Move Down</button>
            </td>
            <td>
                <input type="text" name="data[{{sr-id}}][name]" />
            </td>
            <td>
                <select name="data[{{sr-id}}][gender]" >
                    <option value="male">Male</option>
                    <option value="female">FeMale</option>
                </select>
            </td>
            <td>
                <button class="sr-table-template-delete">Delete</button>
            </td>
        </tr>
    </tbody>
</table>