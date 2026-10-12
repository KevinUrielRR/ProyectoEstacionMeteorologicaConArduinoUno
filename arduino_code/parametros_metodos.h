
#include "parametros_atributos.h"


void inicio_parametros_dht11()
{
    Serial.print("METEOCS iniciando");
    Serial.begin(9600);
    sensor_dht11.setDelay(1);
}

void load_dht11()
{
    
    lector_dht11 = sensor_dht11.readTemperatureHumidity(temperatura,humedad_ambiente);
    //char *parametro_temperatura[3] = {"k",temperatura,"u"};
    
    if (lector_dht11==0)
    {
       // Serial.println("temperatura: ",temperatura," °C");
        Serial.print("temperatura: ");
        Serial.print(temperatura);
        Serial.println(" °C");
        
        Serial.print("humedad ambiente: ");
        Serial.print(humedad_ambiente);
        Serial.println(" %");
        
    }
    else
    {
        Serial.println("no dht11");
    }
  
}