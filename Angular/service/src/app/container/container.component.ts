import { Component, OnInit } from '@angular/core';
import { ApiService } from '../services/api.service';
@Component({
  selector: 'app-container',
  templateUrl: './container.component.html',
  styleUrls: ['./container.component.scss']
})
export class ContainerComponent implements OnInit {

  constructor(  private apiService : ApiService) { 
    apiService.sayHello(apiService.findRandom(5,10));

  }
  


  ngOnInit() {
  }

}
