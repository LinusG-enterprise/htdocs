
// installerer biblioteker og konfigurerer Oled:
#include <SPI.h>
#include <Wire.h>
#include <Adafruit_GFX.h>
#include <Adafruit_SSD1306.h>

#define SCREEN_WIDTH 128 // OLED display bredde i pixler
#define SCREEN_HEIGHT 64 // OLED display høyde i pixler

#define OLED_RESET     4 // Reset pin # (or -1 if sharing Arduino reset pin)
Adafruit_SSD1306 display(SCREEN_WIDTH, SCREEN_HEIGHT, &Wire, OLED_RESET);

//deffinerer verdier:
const int oneHundred = 9;
const int seventyFive = 8;
const int fifty = 7;
const int twentyFive = 6;
const int led = 13;
unsigned long lastChange = 0;
bool lastState[4] = { false, false, false, false };


//deffinerer om GPIO er In eller out og starter oled og serial
void setup() {
 display.begin(SSD1306_SWITCHCAPVCC, 0x3D); 
  pinMode (oneHundred, INPUT);
  pinMode (seventyFive, INPUT);
  pinMode (fifty, INPUT);
  pinMode (twentyFive, INPUT);
  pinMode (led, OUTPUT);
  Serial.begin(9600);
}

//hvis vannivå er 100%:
void hundre(){
  int f=(digitalRead(oneHundred) &&digitalRead(seventyFive)&& digitalRead(fifty) && digitalRead(twentyFive)); // sjekker om alle =  HIGH 
  if (f) {
    Serial.println("hundre%"); //Skriver ut i serial monitor
    display.setTextSize(1); //definerer tekststrørrelse
    display.setTextColor(WHITE); //definerer tekststfarge
    display.setCursor(0,2); //definerer teksplassering
    display.println("vannstand: 100 %"); //skriver vannstanden på Oled displayet
    display.fillRoundRect(0, 16, 20, 40, 8, WHITE);// lager 4 avrundede firkanter med fyll siden vannivå er 100%
    display.fillRoundRect(25, 16, 20, 40, 8, WHITE);
    display.fillRoundRect(50, 16, 20, 40, 8, WHITE);
    display.fillRoundRect(75, 16, 20, 40, 8, WHITE);
    motorAv(); //motorstatus = av
    display.display(); 
    display.clearDisplay();
  }
}


//hvis vannivå er 75%:
void syttiFem(){
  int f= (!digitalRead(oneHundred)&& digitalRead(seventyFive)&& digitalRead(fifty) &&digitalRead(twentyFive));// sjekker om alle untatt 100 =  HIGH 
  if (f) {
    Serial.println("syttiFem%");//Skriver ut i serial monitor
    display.setTextSize(1);//definerer tekststrørrelse
    display.setTextColor(WHITE); //definerer tekststfarge
    display.setCursor(0,2); //definerer teksplassering
    display.println("vannstand: 75 %"); //skriver vannstanden på Oled displayet
    display.fillRoundRect(0, 16, 20, 40, 8, WHITE);// lager 3 avrundede firkanter med fyll siden vannivå er 75%:
    display.fillRoundRect(25, 16, 20, 40, 8, WHITE);
    display.fillRoundRect(50, 16, 20, 40, 8, WHITE);
    display.drawRoundRect(75, 16, 20, 40, 8, WHITE);// lager 3 avrundede firkanter uten fyll siden vannivå er 75%
    motorPa(); //sjekker om motor er på 
    motorAv();//sjekker om motor er av
    display.display();
    display.clearDisplay();
  }
}


//hvis vannivå er 50%:
void femti(){
  int f= (!digitalRead(oneHundred)&& !digitalRead(seventyFive)&& digitalRead(fifty) &&digitalRead(twentyFive));// sjekker om alle untatt 100 og 75 =  HIGH
  if (f) {
    Serial.println("Femti%");//Skriver ut i serial monitor
    display.setTextSize(1); //definerer tekststrørrelse
    display.setTextColor(WHITE);//definerer tekststfarge
    display.setCursor(0,2); //definerer teksplassering
    display.println("vannstand: 50%"); //skriver vannstanden på Oled displayet
    display.fillRoundRect(0, 16, 20, 40, 8, WHITE);// lager 2 avrundede firkanter med fyll siden vannivå er 50%:
    display.fillRoundRect(25, 16, 20, 40, 8, WHITE);
    display.drawRoundRect(50, 16, 20, 40, 8, WHITE);// lager 2 avrundede firkanter uten fyll siden vannivå er 50%:
    display.drawRoundRect(75, 16, 20, 40, 8, WHITE);
    motorPa();//sjekker om motor er på 
    motorAv();//sjekker om motor er av
    display.display();
    display.clearDisplay();
  }
}

//hvis vannivå er 25%:
void tjueFem(){
  int f= (!digitalRead(oneHundred)&& !digitalRead(seventyFive)&& !digitalRead(fifty) &&digitalRead(twentyFive)); // sjekker om bare 25 =  HIGH
  if (f) {
    Serial.println("tjuefem%"); //Skriver ut i serial monitor
    display.setTextSize(1);//definerer tekststrørrelse
    display.setTextColor(WHITE);//definerer tekststfarge
    display.setCursor(0,2);//definerer teksplassering
    display.println("vannstand: 25 %"); //skriver vannstanden på Oled displayet
    display.fillRoundRect(0, 16, 20, 40, 8, WHITE);// lager 1 avrundede firkanter med fyll siden vannivå er 25%
    display.drawRoundRect(25, 16, 20, 40, 8, WHITE);// lager 3 avrundede firkanter uten fyll siden vannivå er 25%:
    display.drawRoundRect(50, 16, 20, 40, 8, WHITE);
    display.drawRoundRect(75, 16, 20, 40, 8, WHITE);
    motorPa();//sjekker om motor er på 
    motorAv();//sjekker om motor er av
    display.display();
    display.clearDisplay();
  }
}


//skrur på motor hvis vannivå er <25
void motor(){
  int f= (!digitalRead(oneHundred)&& !digitalRead(seventyFive)&& !digitalRead(fifty) && !digitalRead(twentyFive)); //sjekker om vannivå er <25 
  if (f) {
    Serial.println("motor");//Skriver ut i serial monitor
    digitalWrite (led, 1); //skrur på led
    display.setTextSize(1); //definerer tekststrørrelse
    display.setTextColor(WHITE);//definerer tekstfarge
    display.setCursor(0,2); //definerer teksplassering
    display.println("vannstand: > 25%"); //skriver vannstanden på Oled displayet
    display.drawRoundRect(0, 16, 20, 40, 8, WHITE); //tegner 4 avrundede firkanter uten fyll siden vannivå er <25%
    display.drawRoundRect(25, 16, 20, 40, 8, WHITE);
    display.drawRoundRect(50, 16, 20, 40, 8, WHITE);
    display.drawRoundRect(75, 16, 20, 40, 8, WHITE);
    motorPa(); //motorstatus = på
    display.display();
    display.clearDisplay();
  }
}

//stopper motor
void stopMotor(){
if (digitalRead (led) && digitalRead(oneHundred)== HIGH){ //hvis både led er på og vannsensorene måler 100% skrus motor av
    display.setTextSize(2); //definerer tekststrørrelse
    display.setTextColor(WHITE); //definerer tekstfarge
    display.setCursor(0,28);//definerer teksplassering
    display.println("Stopper"); //skriver at motor stopper på Oled displayet
    display.println("Motor");
    display.setCursor(0,56);//definerer teksplassering
    display.setTextSize(1);//definerer tekststrørrelse
    motorAv(); // angir motorstatus som av
    display.display();
    display.clearDisplay();
    digitalWrite (led, 0); //skrur av led
  }
}

//angir motorstatus som på
void motorPa(){
  if (digitalRead (led) == HIGH) { // hvis led er på er motorstatus High
    display.setCursor(0,56);//definerer teksplassering
    display.println("Motorstatus: PA");//skriver at motor er på på Oled displayet
  }
}

//angir motorstatus som av
void motorAv(){
  if (digitalRead (led) == LOW){ // hvis led er av er motorstatus Low
    display.setCursor(0,56);//definerer teksplassering
    display.println("Motorstatus: av");//skriver at motor er av på Oled displayet
  }
 }


//sjekker etter sensorfeil
void sensorFeil(){
  if((digitalRead(oneHundred) && !digitalRead(seventyFive)) || (digitalRead(seventyFive) && !digitalRead(fifty)) || ( digitalRead(fifty) && !digitalRead(twentyFive))){ //hvis hundre er High og noe lavere ikke er det blir det sensorfeil
  display.setTextSize(2); //definerer tekststrørrelse
  display.setTextColor(WHITE); //definerer tekstfarge
  display.setCursor(0,2); //definerer teksplassering
  display.println("Sensorfeil"); //skriver sensorfeil på Oled displayet
  display.drawTriangle(30, 20, 5, 55, 55, 55, WHITE); // tegner en trekant
  display.fillRoundRect(27, 25, 8, 18, 8, WHITE); // de to neste linjene tegner en strek og en sirkel som former en "!"
  display.fillCircle(30, 49, 4, WHITE);
  display.display();
  display.clearDisplay();
  }
}

//sjekker om vannivå synker fort
void vannTap(){
  if(!digitalRead(led) && ((!digitalRead(twentyFive) && lastState[0] != digitalRead(twentyFive)) || (!digitalRead(fifty) && lastState[1] != digitalRead(fifty)) || (!digitalRead(seventyFive) && lastState[2] != digitalRead(seventyFive)) || (!digitalRead(oneHundred) && lastState[3] != digitalRead(oneHundred)))) {
    Serial.println("Endring"); // Skriver ut i serial monitor
    if(lastChange > millis()) { //sjekker om lastchange har en lavere verdi enn millis
      digitalWrite(led, HIGH); // skrur på motor
      display.setTextSize(2); //definerer tekststørrelse 
      display.setTextColor(WHITE); //definerer tekstfarge
      display.setCursor(0,2); //definerer tekstplasering
      display.println("VANNTAP!"); // skriver ut vanntap på oled
      display.drawTriangle(30, 20, 5, 55, 55, 55, WHITE); // neste 3 linjer lager en varsel trekant:
      display.fillRoundRect(27, 25, 8, 18, 8, WHITE);
      display.fillCircle(30, 49, 4, WHITE);
      display.display();
      delay(1000); // liten pause så man rekker å lese meldingen 
    }

    lastChange = millis() + 2000; // definerer lastchange som millis + 2000
  }
}

//loopen repeterer funksjonene kontinuerlig
void loop() {
  hundre();
  syttiFem();
  femti();
  tjueFem();
  motor();
  stopMotor();
  sensorFeil();
  vannTap();

  //definerer sensor verdier som lastState verdier 
  lastState[0] = digitalRead(twentyFive);
  lastState[1] = digitalRead(fifty);
  lastState[2] = digitalRead(seventyFive);
  lastState[3] = digitalRead(oneHundred);
  
  }
  
 

 

      

 