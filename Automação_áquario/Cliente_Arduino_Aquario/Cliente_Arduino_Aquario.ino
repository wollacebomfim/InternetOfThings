#include <Ethernet.h>
#define pin 7;
#define pin 6;
#define pin 5;
#define pin 4;


EthernetServer server = EthernetServer(80);
void setup() 
{

pinMode(7, INPUT);
pinMode(6, INPUT);
pinMode(5, INPUT);
pinMode(4, INPUT);


uint8_t mac[] = {0xDE,0xAD,0xBE,0xEF,0xFE,0xED}; //Definindo MAC na rede interna
IPAddress ip(10,0,0,100);   //Defininado IP da rede interna
IPAddress gateway(10,0,0,1);  //Definindo Gateway da rede interna
IPAddress subnet(255,255,255,0); //Mascara da rede interna
Ethernet.begin(mac, ip, gateway, subnet);
server.begin();
}


void loop() {
 EthernetClient client = server.available();
 if(client)
 {
  switch(client.read())
  {
    

//Acionamento 1 pino  
 
    case '1':
    pinMode(7, HIGH);
    delay(1000);
    break;

    case '2':
    pinMode(7, LOW);
    delay(1000);
    break;
    
//Acionamento 2 pino

    case '3':
    pinMode(6, HIGH);
    delay(1000);
    break;

    case '4':
    pinMode(6, LOW);
    delay(1000);
    break;
    
//Acionamento 3 pino

    case '5':
    pinMode(5, HIGH);
    delay(1000);
    break;

    case '6':
    pinMode(5, LOW);
    delay(1000);
    break;

   
//Acionamento 4 pino

    case '7':
    pinMode(4, HIGH);
    delay(1000);
    break;

    case '8':
    pinMode(4, LOW);
    delay(1000);
    break;


    default:
    delay(1);
  }
 } 
 client.stop();
}
