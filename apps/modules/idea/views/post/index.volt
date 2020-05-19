{% extends 'templates/base.volt' %}
{% block title %}{{ get_title() }}{% endblock %}

{% block content %}
{# {{ posts }} #}
    {% for post in posts %}
        <p>Judul: {{ post['judul'] }}</p>
        <p>Isi: {{ post['isi'] }}</p>
    {% endfor %}
{% endblock %}