<?php
/**
 * 易优CMS
 * ============================================================================
 * 版权所有 2016-2028 海南赞赞网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.eyoucms.com
 * ----------------------------------------------------------------------------
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 陈风任 <491085389@qq.com>
 * Date: 2019-1-7
 */

namespace app\common\model;

use think\Db;
use think\Cache;
use think\Config;

/**
 * 商城公共处理模型
 */
class ShopPublicHandle
{

    // 商品购买确认页 -- 其他逻辑公共调用方法，部分逻辑改动不适合直接修改原文件时请在此方法做处理和兼容
    public function goodsBuyPagePublicHandle($resultData = [])
    {
        // 其他特殊处理和兼容
        // ...........

        // 返回数据
        return $resultData;
    }

    // 订单提交处理 -- 其他逻辑公共调用方法，部分逻辑改动不适合直接修改原文件时请在此方法做处理和兼容
    public function orderSubmitPublicHandle($orderData = [], $post = [], $usersID = 0, $list = [])
    {
        // 订单结算分佣的分销商信息处理
        $userInfo = GetUsersLatestData($usersID);

        // 如果安装了分销插件则执行
        if (is_dir('./weapp/DealerPlugin/')) {
            // 开启分销插件则执行
            $data = model('Weapp')->getWeappList('DealerPlugin');
            if (!empty($data['status']) && 1 == $data['status']) {
                // 调用分销逻辑层方法
                $dealerCommonLogic = new \weapp\DealerPlugin\logic\DealerCommonLogic;
                $orderData = $dealerCommonLogic->dealerOrderHandle($orderData, $userInfo);
            }
        }

        // 返回数据
        return $orderData;
    }

    // 订单支付完成处理 -- 其他逻辑公共调用方法，部分逻辑改动不适合直接修改原文件时请在此方法做处理和兼容
    public function orderPayCompletePublicHandle($post = [], $userInfo = [], $notify = false, $shopOrder = [], $resultData = [], $goodsList = [])
    {
        // 其他特殊处理和兼容
        // ...........
    }
}