#include <DHT11.h>

DHT11 sensor_dht11(2);



int temperatura;
int humedad_ambiente;
int lector_dht11;

void setup()
{
    Serial.print("METEOCS iniciando");
    Serial.begin(9600);
    sensor_dht11.setDelay(1);
    
}

void loop()
{
    
    lector_dht11 = sensor_dht11.readTemperatureHumidity(temperatura,humedad_ambiente);
    //char *parametro_temperatura[3] = {"k",temperatura,"u"};
    
    if (lector_dht11==0)
    {
        Serial.println("temperatura: ",temperatura," °C");
        
        Serial.print("humedad ambiente: ");
        Serial.print(humedad_ambiente);
        Serial.println(" %");
        
    }
    else
    {
        Serial.println("no dht11");
    }
  
}