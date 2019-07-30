import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-product',
  templateUrl: './product.component.html',
  styleUrls: ['./product.component.scss']
})
export class ProductComponent implements OnInit {
  productId;
  constructor(private router:Router,private activatedRoute:ActivatedRoute) { }

  ngOnInit() {
    this.getParams()
  }

  /**
   * @param data :number
   * @return :bool
   */
  getParams(){
  //   setTimeout(() => {
  //     this.router.navigate(["/"])
  //   }, 2000);
    console.log(this.activatedRoute.snapshot.params["id"]); 
    this.activatedRoute.params.subscribe(
     param => {
      this.productId=param["id"]
     }
    )

  }


}
