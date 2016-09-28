> will this geoip2-plugin will work flawlessly within piwik (which has already geoip1 integrated)?

It was working as core (mentioned erlier PR https://github.com/piwik/piwik/pull/10431 ) and it's currently working without problems on my company instance using current 3.x-dev branch

> will there be any conflicts between both?

None observed, it shows as another Location Provider

> how do I know which data piwik uses really?

Check your settings - currently used location provider is marked

![zrzut ekranu 2016-09-28 10 40 24](https://cloud.githubusercontent.com/assets/2463020/18906481/ffef2c50-8567-11e6-8340-01068950f5df.png)
(on screen there are unknown values because site was accessed from intranet IP address)

You can also reattribute older data using console command:

`./console usercountry:attribute`

> do geoip2 plugin benefit from piwiks autofetch/-update for geoip1 databases?

At this time - no, but it is planned as soon as i get access to Maxmind account so i can test it.
