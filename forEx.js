//1부터 10까지 출력
document.write('1 2 3 4 5 6 7 8 9 10');
document.write('<br><br>');

//1부터 10까지 출력
let i;
for(i = 1; i <= 10; i++){
    document.write(i + ' ');
    }
document.write('<br><br>');

//1~100, 3의배수 출력
for(i = 1; i <= 100; i++){
    if(i%3 == 0){
        document.write(i + ' ');
        }
    }
document.write('<br><br>');

//1~100, 3의배수 출력
let cnt = 0;
for(i = 1; i <= 100; i++){
    if(i%3 == 0){
        document.write(i + ' ');
        cnt++;
        if(cnt%10 == 0){
            document.write('<br>');
            }
        }
    }
document.write('<br><br>');

//1~100 합
let sum;
for(i = 1, sum = 0; i <= 100; i++) {
    sum += i;
}
document.write('1~100의 합 = ' + sum);
document.write('<br><br>');

//1~100, 8의배수 합
for(i = 1, sum = 0; i <= 100; i++) {
    if(i%8 == 0){
        sum += i;
    }
}
document.write('1~100, 8의배수 합 = ' + sum);
document.write('<br><br>');

//1~100의 합, 처음으로 300을 넘는 숫자
for(i = 1, sum = 0; i <= 100; i++) {
    sum += i;
    if(sum >= 300){
        break;
    }
}
document.write('1~100의 합, 처음으로 300을 넘는 합 = ' + sum + '<br>');
document.write('1~100의 합, 처음으로 300을 넘는 수 = ' + i);
document.write('<br><br>');

//1~100의 합 중 8의 배수를 생략한 합
for(i = 1, sum = 0; i <= 100; i++) {
    if(i%8 == 0)
        continue;
    sum += i;
}
document.write('1~100의 합 중 8의 배수를 생략 = ' + sum);
document.write('<br><br>');