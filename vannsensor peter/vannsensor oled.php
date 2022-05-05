#include <SPI.h>
#include <Wire.h>
#include <Adafruit_GFX.h>
#include <Adafruit_SSD1306.h>

#define SCREEN_WIDTH 128 // OLED display width, in pixels
#define SCREEN_HEIGHT 64 // OLED display height, in pixels

// Declaration for an SSD1306 display connected to I2C (SDA, SCL pins)
#define OLED_RESET     4 // Reset pin # (or -1 if sharing Arduino reset pin)
Adafruit_SSD1306 display(SCREEN_WIDTH, SCREEN_HEIGHT, &Wire, OLED_RESET);

const int oneHundred = 9;
const int seventyFive = 8;
const int fifty = 7;
const int twentyFive = 6;
const int led = 13;
unsigned long lastChange = 0;
bool lastState[4] = { false, false, false, false };

void setup() {
 display.begin(SSD1306_SWITCHCAPVCC, 0x3D); 
  pinMode (oneHundred, INPUT);
  pinMode (seventyFive, INPUT);
  pinMode (fifty, INPUT);
  pinMode (twentyFive, INPUT);
  pinMode (led, OUTPUT);
  Serial.begin(9600);
}

void hundre(){
  int f=(digitalRead(oneHundred) &&digitalRead(seventyFive)&& digitalRead(fifty) && digitalRead(twentyFive));
  if (f) {
    Serial.println("hundre%");
    display.setTextSize(1);
    display.setTextColor(WHITE);
    display.setCursor(0,2);
    display.println("vannstand: 100 %");
    display.fillRoundRect(0, 16, 20, 40, 8, WHITE);
    display.fillRoundRect(25, 16, 20, 40, 8, WHITE);
    display.fillRoundRect(50, 16, 20, 40, 8, WHITE);
    display.fillRoundRect(75, 16, 20, 40, 8, WHITE);
    motorAv();
    display.display();
    display.clearDisplay();
  }
}



void syttiFem(){
  int f= (!digitalRead(oneHundred)&& digitalRead(seventyFive)&& digitalRead(fifty) &&digitalRead(twentyFive));
  if (f) {
    Serial.println("syttiFem%");
    display.setTextSize(1);
    display.setTextColor(WHITE);
    display.setCursor(0,2);
    display.println("vannstand: 75 %");
    display.fillRoundRect(0, 16, 20, 40, 8, WHITE);
    display.fillRoundRect(25, 16, 20, 40, 8, WHITE);
    display.fillRoundRect(50, 16, 20, 40, 8, WHITE);
    display.drawRoundRect(75, 16, 20, 40, 8, WHITE);
    motorPa();
    motorAv();
    display.display();
    display.clearDisplay();
  }
}


void femti(){
  int f= (!digitalRead(oneHundred)&& !digitalRead(seventyFive)&& digitalRead(fifty) &&digitalRead(twentyFive));
  if (f) {
    Serial.println("Femti%");
    display.setTextSize(1);
    display.setTextColor(WHITE);
    display.setCursor(0,2);
    display.println("vannstand: 50%");
    display.fillRoundRect(0, 16, 20, 40, 8, WHITE);
    display.fillRoundRect(25, 16, 20, 40, 8, WHITE);
    display.drawRoundRect(50, 16, 20, 40, 8, WHITE);
    display.drawRoundRect(75, 16, 20, 40, 8, WHITE);
    motorPa();
    motorAv();
    display.display();
    display.clearDisplay();
  }
}

void tjueFem(){
  int f= (!digitalRead(oneHundred)&& !digitalRead(seventyFive)&& !digitalRead(fifty) &&digitalRead(twentyFive));
  if (f) {
    Serial.println("tjuefem%");
    display.setTextSize(1);
    display.setTextColor(WHITE);
    display.setCursor(0,2);
    display.println("vannstand: 25 %");
    display.fillRoundRect(0, 16, 20, 40, 8, WHITE);
    display.drawRoundRect(25, 16, 20, 40, 8, WHITE);
    display.drawRoundRect(50, 16, 20, 40, 8, WHITE);
    display.drawRoundRect(75, 16, 20, 40, 8, WHITE);
    motorPa();
    motorAv();
    display.display();
    display.clearDisplay();
  }
}

void motor(){
  int f= (!digitalRead(oneHundred)&& !digitalRead(seventyFive)&& !digitalRead(fifty) && !digitalRead(twentyFive));
  if (f) {
    Serial.println("motor");
    digitalWrite (led, 1);
    display.setTextSize(1);
    display.setTextColor(WHITE);
    display.setCursor(0,2);
    display.println("vannstand: > 25%");
    display.drawRoundRect(0, 16, 20, 40, 8, WHITE);
    display.drawRoundRect(25, 16, 20, 40, 8, WHITE);
    display.drawRoundRect(50, 16, 20, 40, 8, WHITE);
    display.drawRoundRect(75, 16, 20, 40, 8, WHITE);
    display.startscrollright(2, 6);
    motorPa();
    display.display();

    display.clearDisplay();
  }
}

void stopMotor(){
if (digitalRead (led) && digitalRead(oneHundred)== HIGH){
    display.stopscroll();
    display.setTextSize(2);
    display.setTextColor(WHITE);
    display.setCursor(0,28);
    display.println("Stopper");
    display.println("Motor");
    display.setCursor(0,56);
    display.setTextSize(1);
    motorAv();
    display.display();
    
    display.clearDisplay();
    digitalWrite (led, 0);
  }
}

void motorPa(){
  if (digitalRead (led) == HIGH) {
    display.setCursor(0,56);
    display.println("Motorstatus: PA");
  }
}

void motorAv(){
  if (digitalRead (led) == LOW){
    display.setCursor(0,56);
    display.println("Motorstatus: av");
  }
 }


void sensorFeil(){
  if((digitalRead(oneHundred) && !digitalRead(seventyFive)) || (digitalRead(seventyFive) && !digitalRead(fifty)) || ( digitalRead(fifty) && !digitalRead(twentyFive))){
  display.setTextSize(2);
  display.setTextColor(WHITE);
  display.setCursor(0,2);
  display.println("Sensorfeil");
  display.drawTriangle(30, 20, 5, 55, 55, 55, WHITE);
  display.fillRoundRect(27, 25, 8, 18, 8, WHITE);
  display.fillCircle(30, 49, 4, WHITE);
  display.display();
  display.clearDisplay();
  }
}


void vannTap(){
if(!sensorFeil && !led && ((!digitalRead(twentyFive) && lastState[0] != digitalRead(twentyFive)) || (!digitalRead(fifty) && lastState[1] != digitalRead(fifty)) || (!digitalRead(seventyFive) && lastState[2] != digitalRead(seventyFive)) || (!digitalRead(oneHundred) && lastState[3] != digitalRead(oneHundred))) {
    if(lastChange > millis()) {
      digitalWrite(led, HIGH);
      display.setTextSize(2);
  display.setTextColor(WHITE);
  display.setCursor(0,2);
  display.println("VANNTAP!");
  display.drawTriangle(30, 20, 5, 55, 55, 55, WHITE);
  display.fillRoundRect(27, 25, 8, 18, 8, WHITE);
  display.fillCircle(30, 49, 4, WHITE);
    }
    lastChange = millis() + 2000;

    lastChang1
    lastCahange2
    //hver gang status endres 
    if diff chaqng1 og chang2 < angittMinimumTid -->ALARM
  }

}

void loop() {
  hundre();
  syttiFem();
  femti();
  tjueFem();
  motor();
  stopMotor();
  sensorFeil();
  vannTap();
  
  lastState[0] = digitalRead(twentyFive);
  lastState[1] = digitalRead(fifty);
  lastState[2] = digitalRead(seventyFive);
  lastState[3] = digitalRead(oneHundred);
  
  }
  
 

 

      

 