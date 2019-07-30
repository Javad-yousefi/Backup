import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  constructor() { }
  sayHello(times:number){
    for(let i=0;i<times;i++){
      console.log("hello");
    }
  }

  findRandom(min:number,max:number){
   
    return Math.floor( min+Math.floor((Math.random()*(max-min)))
  }
}
