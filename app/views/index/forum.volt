

<h1>{{ title }}</h1>

{% for key, value in categories %}
    {% if oldval != value %}
        {{ value }}
    {% endif  %}
    {{ key }}
    {% set oldval = value %}

{% endfor  %}

