//
//  SGMarco.swift
//  SGHome
//
//  Created by Lix on 17/2/15.
//  Copyright © 2017年 State Grid. All rights reserved.
//

import Foundation
import UIKit

/// 屏幕宽度
//let SCREEN_WIDTH = UIScreen.mainScreen().bounds.width
let SCREEN_WIDTH = UIScreen.main.bounds.width

/// 屏幕高度
let SCREEN_HEIGHT = UIScreen.main.bounds.height

/// 屏幕bounds
let SCREEN_BOUNDS = UIScreen.main.bounds

/// 机型判断
///
/// - returns: Bool
func isIPhone4() -> Bool {
    return UIScreen.main.currentMode?.size == CGSize(width: 640, height: 960)
}

func isIPhone5() -> Bool {
    return UIScreen.main.currentMode?.size == CGSize(width: 640, height: 1136)
}

func isIPhone6() -> Bool {
    return UIScreen.main.currentMode?.size == CGSize(width: 750, height: 1334)
}

func isIPhone6Plus() -> Bool {
    return UIScreen.main.currentMode?.size == CGSize(width: 1242, height: 2208)
}

func isIPhone6PlusBigMode() -> Bool {
    return UIScreen.main.currentMode?.size == CGSize(width: 1125, height: 2001)
}

struct ScreenSize {
    static let SCREEN_WIDTH         = UIScreen.main.bounds.size.width
    static let SCREEN_HEIGHT        = UIScreen.main.bounds.size.height
    static let SCREEN_MAX_LENGTH    = max(ScreenSize.SCREEN_WIDTH, ScreenSize.SCREEN_HEIGHT)
    static let SCREEN_MIN_LENGTH    = min(ScreenSize.SCREEN_WIDTH, ScreenSize.SCREEN_HEIGHT)
}

struct DeviceType {
    static let IS_IPHONE_4_OR_LESS  = UIDevice.current.userInterfaceIdiom == .phone && ScreenSize.SCREEN_MAX_LENGTH == 568.0
    static let IS_IPHONE_5          = UIDevice.current.userInterfaceIdiom == .phone && ScreenSize.SCREEN_MAX_LENGTH == 568.0
    static let IS_IPHONE_6          = UIDevice.current.userInterfaceIdiom == .phone && ScreenSize.SCREEN_MAX_LENGTH == 667.0
    static let IS_IPHONE_6P         = UIDevice.current.userInterfaceIdiom == .phone && ScreenSize.SCREEN_MAX_LENGTH == 736.0
    static let IS_IPAD              = UIDevice.current.userInterfaceIdiom == .pad && ScreenSize.SCREEN_MAX_LENGTH == 1024.0
    static let IS_IPAD_PRO          = UIDevice.current.userInterfaceIdiom == .pad && ScreenSize.SCREEN_MAX_LENGTH == 1366.0
}

/// 系统语言
func currentLanguage() -> String {
    return NSLocale.preferredLanguages.first!
}

/// 系统版本
func systemVersion() -> String {
    return UIDevice.current.systemVersion
}

/// app版本
func appVersion() -> String {
    return String(describing: Bundle.main.infoDictionary!["CFBundleShortVersionString"]!)
}

/// cache文件路径
let cachesPath: String = NSSearchPathForDirectoriesInDomains(.cachesDirectory, .userDomainMask, true).last!

//界面尺寸
/* 导航栏高度 */
let kNavigationH = 64
/* 工具栏高度 */
let kTabBarHeight = 49

/**
 加载Xib
 - parameter nibName: Xib名字
 - returns: AnyObject
 */
func sgLoadNibNamed(nibName:String)-> AnyObject {
    return Bundle.main.loadNibNamed(nibName, owner: nil, options: nil)!.first! as AnyObject
}

func sgRegisterNib(nibName:String)-> UINib {
    return UINib(nibName: nibName, bundle: nil)
}

/**
 加载StoryBoard
 - parameter nibName: Xib名字
 - returns: AnyObject
 */
func sgLoadStroyBoard(nibName:String, identifier:String)-> UIViewController {
    return UIStoryboard.init(name: nibName, bundle: nil).instantiateViewController(withIdentifier: identifier)
}

/// 快捷返回一个Image
///
/// - parameter name: image name
///
/// - returns: UIImage
func ImageName(name: String) -> UIImage {
    return UIImage.init(named: name)!
}

//从以秒计时的时间里获得表示时间的字符串用于显示
func getTimeStringFromSecond(seconds: Int) -> String {
    
    let secondNumber = seconds % 60
    let minuteNumber = (seconds / 60) % 60
    let hourNumber = (seconds / (60*60)) % 24
    
    let secondText = secondNumber < 10 ? "0\(secondNumber)" : "\(secondNumber)"
    let minuteText = minuteNumber < 10 ? "0\(minuteNumber)" : "\(minuteNumber)"
    let hourText = hourNumber < 10 ? "0\(hourNumber)" : "\(hourNumber)"
    
    return "\(hourText):\(minuteText):\(secondText)"
}

func colorWithRGB(_ r: CGFloat, _ g: CGFloat, _ b: CGFloat) -> UIColor {
    return UIColor.init(red: r / 255.0, green: g / 255.0, blue: b / 255.0, alpha: 1.0)
}

func colorWithRGBA(_ r: CGFloat, _ g: CGFloat, _ b: CGFloat , _ a: CGFloat) -> UIColor {
    return UIColor.init(red: r / 255.0, green: g / 255.0, blue: b / 255.0, alpha: a)
}

func getRedirectURL(userInfo: AnyObject) -> String {
    if let url = userInfo.object(forKey: "redirect") {
        return url as! String
    } else {
        return ""
    }
}
