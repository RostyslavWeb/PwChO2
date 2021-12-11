# PwChO2
Uruchomienie stacku:
## docker-compose up -d
Dla sprawdzenia dzialania połączeń została stworzona aplikacja, zapisująca i wyświetlająca wiadomości z bazy danych.
Przejście do phpmyadmin:
## localhost:6001
Przejście do aplikacji:
## localhost:6660
Generacja obrazku:
## docker run --rm -it --name dcv -v ${PWD}:/input pmsipilot/docker-compose-viz render -m image docker-compose.yml --output-file=schemat.png --force
