<html>
<head>
    <title>CITIESSSSSS</title>
</head>
<body>
    <h1>Cities are cool</h1>
    {% if places is not empty %}
        <p>Here are all of the places you've been</p>
        <ul>
            {% for place in places %}
                <li>{{ place.getCityName }}</li>
            {% endfor %}
        </ul>
    {% endif %}

            <form action='/places' method='post'>
                <label for='city_name'>City name</label>
                <input id='city_name' name='city_name' type='text'>
                <button type='submit'>Add City</button>
            </form>

            <form action='/delete_city' method='post'>
                <button type='submit'>Clear list</button>
            </form>


</body>
</html>
