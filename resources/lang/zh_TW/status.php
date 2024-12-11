<?php

return [
    'AllowDataCount' => '配置允許客戶端記錄數',
    'DenyDataCount' => '配置拒絕客戶端記錄數',
    'DenyPeerIdsCount' => '拒絕 PeerId 記錄數',
    'DenyAgentsCount' => '拒絕 Agent 記錄數',
    'DenyPeerIdAndAgentCount' => 'PeerId+Agent 拒絕記錄數',
    'AllowPeerIdAndAgentCount' => 'PeerId+Agent 允許記錄數',

    'Version' => '版本號',
    'ReleaseDate' => '發布日期',
    'TokenAudience' => '授權給',
    'TokenExpiresAt' => '有效期至',
    'SystemStartsAt' => '系統啟動時間',
    'SystemStartsCostTime' => '系統啟動耗時',
    'PeerSizeAuthorized' => '允許最大同伴數',

    'Total' => '總記錄數',
    'LastSyncAt' => '上次同步時間',
    'LastSyncSuccessCount' => '上次同步成功數',
    'LastSyncFailCount' => '上次同步失敗數',
    'LastSyncCostTime' => '上次同步耗時',
    'SyncInterval' => '同步間隔(秒)',

    'SeederCount' => '做種數',
    'LeecherCount' => '下載數',
    'ToRemoveFromDBCount' => '待刪除數量',
    'LastRemoveFromDBAt' => '上次刪除時間',
    'LastRemoveFromDBCount' => '上次刪除數量',
    'RemoveFromDBInterval' => '刪除間隔(秒)',

    'TotalRequest' => '請求總數',
    'RequestTimeAverage' => '請求平均耗時(毫秒)',
    'AnnounceTotalRequest' => '匯報請求總數',
    'AnnounceRequestTimeAverage' => '匯報請求平均耗時(毫秒)',
    'ScrapeTotalRequest' => '刮削請求總數',
    'ScrapeRequestTimeAverage' => '刮削請求平均耗時(毫秒)',
    'ThroughPut' => '吞吐量(每秒)',
    'Concurrency' => '並發量',

    'MemCurrent' => '當前分配內存',
    'MemTotal' => '運行以來分配總內存',
    'MemSys' => '從操作系統獲得內存',
    'NumGC' => '垃圾回收次數',
    'NumGoroutines' => 'Go 協程數量',
    'GoVersion' => 'Go 版本',
];
