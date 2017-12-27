//
//  WebViewController.swift
//  MagicList
//
//  Created by Lix on 2017/12/27.
//  Copyright © 2017年 Lix. All rights reserved.
//

import UIKit

class WebViewController: UIViewController {
    
    @IBOutlet weak var webView: UIWebView!
    override func viewWillAppear(_ animated: Bool) {
        super.viewWillAppear(animated)
        self.navigationController?.isNavigationBarHidden = true
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()
        let url: URL = URL.init(string: "http://www.list.local/homes?access-token=123")!
        let request: URLRequest = URLRequest.init(url: url)
        webView.loadRequest(request)
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
    }
}
