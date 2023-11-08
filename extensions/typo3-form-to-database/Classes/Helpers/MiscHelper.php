<?php /** @noinspection ALL */

namespace Lavitto\FormToDatabase\Helpers;

use Lavitto\FormToDatabase\Domain\Repository\FormResultRepository;
use PDO;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\QueryBuilder;
use TYPO3\CMS\Core\Exception\SiteNotFoundException;
use TYPO3\CMS\Core\Site\SiteFinder;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class MiscHelper
{

    /**
     * Get webmounts of BE User
     *
     * @return array
     */
    static public function getWebMounts()
    {
        $webMounts = [];
        if ($GLOBALS['BE_USER']->groupData['webmounts']) {
            $webMounts = GeneralUtility::trimExplode(',', $GLOBALS['BE_USER']->groupData['webmounts'], 1);
        }
        return $webMounts;
    }

    /**
     * Get SiteIdentifiers from Root Pids
     *
     * @return array
     */
    static public function getSiteIdentifiersFromRootPids($webMounts)
    {
        $siteIdentifiers = [];
        if ($webMounts) {
            //find site identifiers from mountpoints
            /** @var SiteFinder $siteMatcher */
            $siteMatcher = GeneralUtility::makeInstance(SiteFinder::class);
            foreach ($webMounts as $webMount) {
                try {
                    $site = $siteMatcher->getSiteByRootPageId((int)$webMount);
                    $siteIdentifiers[] = $site->getIdentifier();
                } catch (SiteNotFoundException $exception) {
                }
            }
        }
        return $siteIdentifiers;
    }

    /**
     * @param $webMounts
     * @return array
     */
    static public function getPluginUids($webMounts)
    {
        $queryGenerator = GeneralUtility::makeInstance(FormResultRepository::class);
        $pids = $queryGenerator->getTreePids($webMounts);
        /** @var QueryBuilder $queryBuilder */
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tt_content');
        $queryBuilder->getRestrictions()->removeAll();
        $result = $queryBuilder
            ->select('uid')
            ->from('tt_content')->where($queryBuilder->expr()->in('pid', $pids ? $pids : [0]), $queryBuilder->expr()->eq('CType',
            $queryBuilder->createNamedParameter('form_formframework', PDO::PARAM_STR)))->executeQuery()->fetchAll();
        return array_column($result, 'uid');
    }

}
