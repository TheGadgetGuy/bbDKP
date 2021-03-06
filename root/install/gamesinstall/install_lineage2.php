<?php
/**
 * @author sh1ny https://github.com/sh1ny/
 * bbdkp lineage2 install data
 * @package bbDkp-installer
 * @copyright (c) 2011 bbDKP <https://github.com/bbdkp/>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * 
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

function install_lineage2()
{
    global $db, $table_prefix, $umil, $user;
    
    	$db->sql_query('DELETE FROM ' . $table_prefix . "bbdkp_classes where game_id = 'lineage2'" );   
    	$sql_ary = array();
    
    	// class general
		// Unknown
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 0, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 1 , 'class_max_level'  => 20, 'imagename' => 'lineage2_Unknown_small' );

    	// Human Fighter - 1-20
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 1, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 1 , 'class_max_level'  => 20, 'imagename' => 'lineage2_hfighter_small' );
    	// Human Warrior - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 2, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_hwarrior_small' );
    	// Human Knight - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 3, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_hknight_small' );
    	// Human Rogue - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 4, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_hrogue_small' );

    	// Human Mystic - 1-20
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 5, 'class_armor_type' => 'ROBE' , 'class_min_level' => 1 , 'class_max_level'  => 20, 'imagename' => 'lineage2_hmystic_small' );
    	// Human Wizard - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 6, 'class_armor_type' => 'ROBE' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_hwizard_small' );
    	// Human Cleric - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 7, 'class_armor_type' => 'ROBE' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_hcleric_small' );

	// Human Warlord
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 8, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_warlord_small' );
	// Human Gladiator
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 9, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_gladiator_small' );
	// Human Paladin
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 10, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_paladin_small' );
	// Human Dark Avenger
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 11, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_darkavenger_small' );
	// Human Treasure Hunter
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 12, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_treasurehunter_small' );
	// Human Hawkeye
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 13, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_hawkeye_small' );

	// Human Sorcerer
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 14, 'class_armor_type' => 'ROBE' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_sorc_small' );
	// Human Necormancer
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 15, 'class_armor_type' => 'ROBE' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_necro_small' );
	// Human Warlock
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 16, 'class_armor_type' => 'ROBE' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_warlock_small' );
	// Human Bishop
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 17, 'class_armor_type' => 'ROBE' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_bishop_small' );
	// Human Prophet
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 18, 'class_armor_type' => 'ROBE' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_prophet_small' );

	// Human Dreadnought
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 19, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_dreadnought_small' );
	// Human Duelist
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 20, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_duelist_small' );
	// Human Phoenix Knight
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 21, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_phoenixknight_small' );
	// Human Hell Knight
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 22, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_hellknight_small' );
	// Human Adventurer
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 23, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_adventurer_small' );
	// Human Sagittarius
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 24, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_sagittarius_small' );

	// Human Archmage
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 25, 'class_armor_type' => 'ROBE' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_archmage_small' );
	// Human Soultaker
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 26, 'class_armor_type' => 'ROBE' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_soultaker_small' );
	// Human Arcana Lord
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 27, 'class_armor_type' => 'ROBE' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_arcanalord_small' );
	// Human Cardinal
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 28, 'class_armor_type' => 'ROBE' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_cardinal_small' );
	// Human Hierophant
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 29, 'class_armor_type' => 'ROBE' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_hierophant_small' );

	// ================ ELVES ================ //
    	// Elven Fighter - 1-20
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 30, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 1 , 'class_max_level'  => 20, 'imagename' => 'lineage2_efighter_small' );
    	// Elven Mystic - 1-20
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 31, 'class_armor_type' => 'ROBE' , 'class_min_level' => 1 , 'class_max_level'  => 20, 'imagename' => 'lineage2_emystic_small' );

    	// Elven Knight - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 32, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_eknight_small' );
    	// Elven Scout - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 33, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_escout_small' );

    	// Elven Wizard - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 34, 'class_armor_type' => 'ROBE' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_ewizard_small' );
    	// Elven Oracle - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 35, 'class_armor_type' => 'ROBE' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_eoracle_small' );

	// Temple Knight
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 36, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_templeknight_small' );
	// Sword Singer
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 37, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_swordsinger_small' );
	// Plainswalker
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 38, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_plainswalker_small' );
	// Silver Ranger
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 39, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_silverranger_small' );

	// Spell Singer
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 40, 'class_armor_type' => 'ROBE' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_spellsinger_small' );
	// Elemental Summoner
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 41, 'class_armor_type' => 'ROBE' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_elementalsummoner_small' );
	// Elven Elder
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 42, 'class_armor_type' => 'ROBE' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_elvenelder_small' );

	// Evas Templar
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 43, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_evastemplar_small' );
	// Sword Muse
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 44, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_swordmuse_small' );
	// Wind Rider
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 45, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_windrider_small' );
	// Moonlight Sentinel
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 46, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_moonlightsentinel_small' );

	// Mystic Muse
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 47, 'class_armor_type' => 'ROBE' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_mysticmuse_small' );
	// Elemental Master
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 48, 'class_armor_type' => 'ROBE' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_elementalmaster_small' );
	// Eva's Saint
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 49, 'class_armor_type' => 'ROBE' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_evassaint_small' );

	// ================ DARK ELVES ================ //

    	// Dark Fighter - 1-20
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 50, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 1 , 'class_max_level'  => 20, 'imagename' => 'lineage2_defighter_small' );
    	// Dark Mystic - 1-20
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 51, 'class_armor_type' => 'ROBE' , 'class_min_level' => 1 , 'class_max_level'  => 20, 'imagename' => 'lineage2_demystic_small' );

    	// Palus Knight - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 52, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_palusknight_small' );
    	// Assassin - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 53, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_assassin_small' );

    	// Dark Wizard - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 54, 'class_armor_type' => 'ROBE' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_dewizard_small' );
    	// Shillien Oracle - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 55, 'class_armor_type' => 'ROBE' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_soracle_small' );

	// Shillien Knight
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 56, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_shillienknight_small' );
	// Blade Dancer
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 57, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_bladedancer_small' );
	// Abyss Walker
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 58, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_abyssswalker_small' );
	// Phantom Ranger
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 59, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_phantomranger_small' );

	// Spell Howler
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 60, 'class_armor_type' => 'ROBE' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_spellhowler_small' );
	// Phantom Summoner
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 61, 'class_armor_type' => 'ROBE' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_phantomsummoner_small' );
	// Shillien Elder
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 62, 'class_armor_type' => 'ROBE' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_shillienelder_small' );

	// Shillien Templar
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 63, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_shillientemplar_small' );
	// Spectral Dancer
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 64, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_spectraldancer_small' );
	// Ghost Hunter
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 65, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_ghosthunter_small' );
	// Ghost Sentinel
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 66, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_ghosttsentinel_small' );

	// Storm Screamer
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 67, 'class_armor_type' => 'ROBE' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_stormscreamer_small' );
	// Spectral Master
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 68, 'class_armor_type' => 'ROBE' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_spectralmaster_small' );
	// Shillien Saint
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 69, 'class_armor_type' => 'ROBE' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_shilliensaint_small' );

	// ================ ORCS ================ //

    	// Orc Fighter - 1-20
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 70, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 1 , 'class_max_level'  => 20, 'imagename' => 'lineage2_ofighter_small' );
    	// Orc Mystic - 1-20
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 71, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 1 , 'class_max_level'  => 20, 'imagename' => 'lineage2_omystic_small' );

    	// Orc Raider - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 72, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_oraider_small' );
    	// Orc Monk - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 73, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_omonk_small' );

    	// Orc Shaman - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 74, 'class_armor_type' => 'ROBE' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_oshaman_small' );


	// Destroyer
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 75, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_destroyer_small' );
	// Tyrant
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 76, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_tyrant_small' );

	// Overlord
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 77, 'class_armor_type' => 'ROBE' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_overlord_small' );
	// Warcryer
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 78, 'class_armor_type' => 'ROBE' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_warcyer_small' );


	// Titan
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 79, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_titan_small' );
	// Grand Khavatari
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 80, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_grandkhavatari_small' );

	// Dominator
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 81, 'class_armor_type' => 'ROBE' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_dominator_small' );
	// Doomcryer
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 82, 'class_armor_type' => 'ROBE' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_doomcryer_small' );


	// ================ DWARVES ================ //

    	// Dwarf Fighter - 1-20
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 83, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 1 , 'class_max_level'  => 20, 'imagename' => 'lineage2_dfighter_small' );

    	// Scavenger - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 84, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_scavenger_small' );
    	// Artisan - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 85, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_artisan_small' );

    	// Bounty Hunter - 40-76
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 86, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_bountyhunter_small' );
    	// Warsmith - 40-76
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 87, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_warsmith_small' );

    	// Fortune Seeker - 76-85
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 88, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_fortuneseeker_small' );
    	// Maestro - 76-85
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 89, 'class_armor_type' => 'HEAVY' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_maestro_small' );


	// ================ KAMAELS ================ //
    	// Kamael Male Soldier - 1-20
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 90, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 1 , 'class_max_level'  => 20, 'imagename' => 'lineage2_kmsoldier_small' );
    	// Kamael Female Soldier - 1-20
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 91, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 1 , 'class_max_level'  => 20, 'imagename' => 'lineage2_kfsoldier_small' );

    	// Trooper - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 92, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_trooper_small' );
    	// Warder - 20-40
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 93, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 20 , 'class_max_level'  => 40, 'imagename' => 'lineage2_warder_small' );

    	// Berserker - 40-76
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 94, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_berserker_small' );
    	// Soul Breaker - 40-76
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 95, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_soulbreaker_small' );
    	// Arbalester - 40-76
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 96, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_arbalester_small' );


    	// Doombringer - 76-85
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 97, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_doombringer_small' );
    	// Soul Hound - 76-85
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 98, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_soulhound_small' );
    	// Trickster - 76-85
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 99, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_trickster_small' );

    	// Inspector - 40-76
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 100, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 40 , 'class_max_level'  => 76, 'imagename' => 'lineage2_inspector_small' );
    	// Judicator - 76-85
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 101, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 76 , 'class_max_level'  => 85, 'imagename' => 'lineage2_judicator_small' );


	// ================ NEW CLASSES ================ //
    	// Yr Archer - 85-99
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 102, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 85 , 'class_max_level'  => 99, 'imagename' => 'lineage2_yrarcher_small' );
    	// Tyr Warrior - 85-99
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 103, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 85 , 'class_max_level'  => 99, 'imagename' => 'lineage2_tyrwarrior_small' );
    	// Feoh Wizard - 85-99
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 104, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 85 , 'class_max_level'  => 99, 'imagename' => 'lineage2_feohwizard_small' );
    	// Othell Rogue - 85-99
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 105, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 85 , 'class_max_level'  => 99, 'imagename' => 'lineage2_othellrogue_small' );
    	// Iss Enchanter - 85-99
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 106, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 85 , 'class_max_level'  => 99, 'imagename' => 'lineage2_issenchanter_small' );
    	// Sigel Knight - 85-99
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 107, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 85 , 'class_max_level'  => 99, 'imagename' => 'lineage2_sigelknight_small' );
    	// Eolh Healer - 85-99
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 108, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 85 , 'class_max_level'  => 99, 'imagename' => 'lineage2_eolhhealer_small' );
    	// Wynn Summoner - 85-99
    	$sql_ary[] = array('game_id' => 'lineage2','class_id' => 109, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 85 , 'class_max_level'  => 99, 'imagename' => 'lineage2_wynnsummoner_small' );

    	$db->sql_multi_insert( $table_prefix . 'bbdkp_classes', $sql_ary);
   	unset ($sql_ary); 
   	
   	// factions
   	$db->sql_query('DELETE FROM ' . $table_prefix . "bbdkp_factions where game_id = 'lineage2'" );	    
    	$sql_ary = array();
    	$sql_ary[] = array('game_id' => 'lineage2','faction_id' => 1, 'faction_name' => 'Default' );
    	$db->sql_multi_insert( $table_prefix . 'bbdkp_factions', $sql_ary);
    	unset ($sql_ary); 
    
    // races
    	$db->sql_query('DELETE FROM ' . $table_prefix . "bbdkp_races  where game_id = 'lineage2'");  
    	$sql_ary = array();
    	$sql_ary[] = array('game_id' => 'lineage2','race_id' => 0, 'race_faction_id' => 1 );
    	$sql_ary[] = array('game_id' => 'lineage2','race_id' => 1, 'race_faction_id' => 1 );
    	$sql_ary[] = array('game_id' => 'lineage2','race_id' => 2, 'race_faction_id' => 1 );
    	$sql_ary[] = array('game_id' => 'lineage2','race_id' => 3, 'race_faction_id' => 1 );
    	$sql_ary[] = array('game_id' => 'lineage2','race_id' => 4, 'race_faction_id' => 1 );
    	$sql_ary[] = array('game_id' => 'lineage2','race_id' => 5, 'race_faction_id' => 1 );
    	$sql_ary[] = array('game_id' => 'lineage2','race_id' => 6, 'race_faction_id' => 1 );
    	$db->sql_multi_insert( $table_prefix . 'bbdkp_races', $sql_ary);
	unset ($sql_ary);	

    	$db->sql_query('DELETE FROM ' . $table_prefix . "bbdkp_language  where game_id = 'lineage2' and (attribute='class' or attribute = 'race')");
    	$sql_ary = array();
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 0, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Unknown' ,  'name_short' =>  'Unknown' );

	// Human - Fighter	
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 1, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Human Fighter' ,  'name_short' =>  'Human Fighter' );
	// Human - Warrior
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 2, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Human Warrior' ,  'name_short' =>  'Human Warrior' );
	// Human - Knight
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 3, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Human Knight' ,  'name_short' =>  'Human Knight' );
	// Human - Rogue
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 4, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Human Rogue' ,  'name_short' =>  'Human Rogue' );
	// Human - Mystic
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 5, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Human Mystic' ,  'name_short' =>  'Human Mystic' );
	// Human - Wizard
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 6, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Human Wizard' ,  'name_short' =>  'Human Wizard' );
	// Human - Cleric
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 7, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Human Cleric' ,  'name_short' =>  'Human Cleric' );

	// Human - Warlord
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 8, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Warlord' ,  'name_short' =>  'Warlord' );
	// Human - Gladiator
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 9, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Gladiator' ,  'name_short' =>  'Gladiator' );
	// Human - Paladin
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 10, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Paladin' ,  'name_short' =>  'Paladin' );
	// Human - Dark Avenger
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 11, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Dark Avenger' ,  'name_short' =>  'Dark Avenger' );
	// Human - Treasure Hunter
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 12, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Treasure Hunter' ,  'name_short' =>  'Treasure Hunter' );
	// Human - Hawkeye
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 13, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Hawkeye' ,  'name_short' =>  'Hawkeye' );

	// Human - Sorcerer
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 14, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Sorcerer' ,  'name_short' =>  'Sorcerer' );
	// Human - Necromancer
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 15, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Necromancer' ,  'name_short' =>  'Necromancer' );
	// Human - Warlock
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 16, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Warlock' ,  'name_short' =>  'Warlock' );
	// Human - Bishop
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 17, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Bishop' ,  'name_short' =>  'Bishop' );
	// Human - Prophet
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 18, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Prophet' ,  'name_short' =>  'Prophet' );

	// Human - Dreadnought
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 19, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Dreadnought' ,  'name_short' =>  'Dreadnought' );
	// Human - Duelist
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 20, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Duelist' ,  'name_short' =>  'Duelist' );
	// Human - Phoenix Knight
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 21, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Phoenix Knight' ,  'name_short' =>  'Phoenix Knight' );
	// Human - Hell Knight
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 22, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Hell Knight' ,  'name_short' =>  'Hell Knight' );
	// Human - Adventurer
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 23, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Adventurer' ,  'name_short' =>  'Adventurer' );
	// Human - Sagittarius
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 24, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Sagittarius' ,  'name_short' =>  'Sagittarius' );

	// Human - Archmage
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 25, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Archmage' ,  'name_short' =>  'Archmage' );
	// Human - Soultaker
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 26, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Soultaker' ,  'name_short' =>  'Soultaker' );
	// Human - Arcana Lord
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 27, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Arcana Lord' ,  'name_short' =>  'Arcana Lord' );
	// Human - Cardinal
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 28, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Cardinal' ,  'name_short' =>  'Cardinal' );
	// Human - Hierophant
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 29, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Hierophant' ,  'name_short' =>  'Hierophant' );

	// ================ ELVES ================ //

	// Elven Fighter
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 30, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Elven Fighter' ,  'name_short' =>  'Elven Fighter' );
	// Elven Mystic
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 31, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Elven Mystic' ,  'name_short' =>  'Elven Mystic' );

	// Elven Knight
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 32, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Elven Knight' ,  'name_short' =>  'Elven Knight' );
	// Elven Scout
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 33, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Elven Scout' ,  'name_short' =>  'Elven Scout' );

	// Elven Wizard
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 34, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Elven Wizard' ,  'name_short' =>  'Elven Wizard' );
	// Elven Oracle
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 35, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Elven Oracle' ,  'name_short' =>  'Elven Oracle' );

	// Temple Knight
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 36, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Temple Knight' ,  'name_short' =>  'Temple Knight' );
	// SwordSinger
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 37, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'SwordSinger' ,  'name_short' =>  'SwordSinger' );
	// Plainswalker
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 38, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Plainswalker' ,  'name_short' =>  'Plainswalker' );
	// Silver Ranger
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 39, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Silver Ranger' ,  'name_short' =>  'Silver Ranger' );

	// SpellSinger
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 40, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'SpellSinger' ,  'name_short' =>  'SpellSinger' );
	// Elemental Summoner
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 41, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Elemental Summoner' ,  'name_short' =>  'Elemental Summoner' );
	// Elven Elder
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 42, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Elven Elder' ,  'name_short' =>  'Elven Elder' );

	// Eva's Templar
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 43, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Eva\'s Templar' ,  'name_short' =>  'Eva Templar' );
	// Sword Muse
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 44, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Sword Muse' ,  'name_short' =>  'Sword Muse' );
	// Wind Rider
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 45, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Wind Rider' ,  'name_short' =>  'Wind Rider' );
	// Moonglight Sentinel
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 46, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Moonglight Sentinel' ,  'name_short' =>  'Moonglight Sentinel' );

	// Mystic Muse
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 47, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Mystic Muse' ,  'name_short' =>  'Mystic Muse' );
	// Elemental Master
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 48, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Elemental Master' ,  'name_short' =>  'Elemental Master' );
	// Eva's Saint
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 49, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Eva\'s Saint' ,  'name_short' =>  'Eva Saint' );

	// ================ DARK ELVES ================ //

	// Dark Fighter
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 50, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Dark Fighter' ,  'name_short' =>  'Dark Fighter' );
	// Dark Mystic
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 51, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Dark Mystic' ,  'name_short' =>  'Dark Mystic' );

	// Palus Knight
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 52, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Palus Knight' ,  'name_short' =>  'Palus Knight' );
	// Assassin
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 53, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Assassin' ,  'name_short' =>  'Assassin' );

	// Dark Wizard
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 54, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Dark Wizard' ,  'name_short' =>  'Dark Wizard' );
	// Shillien Oracle
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 55, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Shillien Oracle' ,  'name_short' =>  'Shillien Oracle' );

	// Shillien Knight
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 56, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Shillien Knight' ,  'name_short' =>  'Shillien Knight' );
	// Blade Dancer
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 57, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Blade Dancer' ,  'name_short' =>  'Blade Dancer' );
	// Abyss Walker
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 58, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Abyss Walker' ,  'name_short' =>  'Abyss Walker' );
	// Phantom Ranger
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 59, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Phantom Ranger' ,  'name_short' =>  'Phantom Ranger' );

	// Spell Howler
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 60, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Spell Howler' ,  'name_short' =>  'Spell Howler' );
	// Phantom Summoner
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 61, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Phantom Summoner' ,  'name_short' =>  'Phantom Summoner' );
	// Shillien Elder
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 62, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Shillien Elder' ,  'name_short' =>  'Shillien Elder' );

	// Shillien Templar
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 63, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Shillien Templar' ,  'name_short' =>  'Shillien Templar' );
	// Spectral Dancer
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 64, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Spectral Dancer' ,  'name_short' =>  'Spectral Dancer' );
	// Ghost Rider
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 65, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Ghost Rider' ,  'name_short' =>  'Ghost Rider' );
	// Ghost Sentinel
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 66, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Ghost Sentinel' ,  'name_short' =>  'Ghost Sentinel' );

	// Storm Screamer
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 67, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Storm Screamer' ,  'name_short' =>  'Storm Screamer' );
	// Spectral Master
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 68, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Spectral Master' ,  'name_short' =>  'Spectral Master' );
	// Shillien Saint
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 69, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Shillien Saint' ,  'name_short' =>  'Shillien Saint' );

	// ================ ORCS ================ //

	// Orc Fighter
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 70, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Orc Fighter' ,  'name_short' =>  'Orc Fighter' );
	// Orc Mystic
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 71, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Orc Mystic' ,  'name_short' =>  'Orc Mystic' );

	// Orc Raider
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 72, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Orc Raider' ,  'name_short' =>  'Orc Raider' );
	// Orc Monk
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 73, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Orc Monk' ,  'name_short' =>  'Orc Monk' );
	// Orc Shaman
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 74, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Orc Shaman' ,  'name_short' =>  'Orc Shaman' );

	// Destroyer
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 75, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Destroyer' ,  'name_short' =>  'Destroyer' );
	// Tyrant
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 76, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Tyrant' ,  'name_short' =>  'Tyrant' );

	// Overlord
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 77, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Overlord' ,  'name_short' =>  'Overlord' );
	// Warcryer
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 78, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Warcryer' ,  'name_short' =>  'Warcryer' );


	// Titan
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 79, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Titan' ,  'name_short' =>  'Titan' );
	// Grand Khavatari
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 80, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Grand Khavatari' ,  'name_short' =>  'Grand Khavatari' );

	// Dominator
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 81, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Dominator' ,  'name_short' =>  'Dominator' );
	// Doomcryer
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 82, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Doomcryer' ,  'name_short' =>  'Doomcryer' );

	// ================ DWARVES ================ //

	// Dwarven Fighter
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 83, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Dwarven Fighter' ,  'name_short' =>  'Dwarven Fighter' );

	// Scavenger
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 84, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Scavenger' ,  'name_short' =>  'Scavenger' );
	// Artisan
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 85, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Artisan' ,  'name_short' =>  'Artisan' );

	// Bounty Hunter
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 86, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Bounty Hunter' ,  'name_short' =>  'Bounty Hunter' );
	// Warsmith
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 87, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Warsmith' ,  'name_short' =>  'Warsmith' );

	// Fortune Seeker
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 88, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Fortune Seeker' ,  'name_short' =>  'Fortune Seeker' );
	// Maestro
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 89, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Maestro' ,  'name_short' =>  'Maestro' );

	// ================ KAMAELS ================ //
	// Kamael Male Solder
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 90, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Kamael Male Solder' ,  'name_short' =>  'Kamael Male Solder' );
	// Kamael Female Solder
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 91, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Kamael Female Solder' ,  'name_short' =>  'Kamael Female Solder' );

	// Trooper
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 92, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Trooper' ,  'name_short' =>  'Trooper' );
	// Warder
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 93, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Warder' ,  'name_short' =>  'Warder' );

	// Berserker
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 94, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Berserker' ,  'name_short' =>  'Berserker' );
	// Soul Breaker
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 95, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Soul Breaker' ,  'name_short' =>  'Soul Breaker' );
	// Arbalester
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 96, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Arbalester' ,  'name_short' =>  'Arbalester' );

	// Doombringer
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 97, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Doombringer' ,  'name_short' =>  'Doombringer' );
	// Soul Hound
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 98, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Soul Hound' ,  'name_short' =>  'Soul Hound' );
	// Trickster
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 99, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Trickster' ,  'name_short' =>  'Trickster' );

	// Inspector
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 100, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Inspector' ,  'name_short' =>  'Inspector' );
	// Judicator
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 101, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Judicator' ,  'name_short' =>  'Judicator' );


	// ================ NEW CLASSES ================ //
	// Yr Archer
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 102, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Yr Archer' ,  'name_short' =>  'Yr Archer' );
	// Tyr Warrior
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 103, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Tyr Warrior' ,  'name_short' =>  'Tyr Warrior' );
	// Feoh Wizard
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 104, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Feoh Wizard' ,  'name_short' =>  'Feoh Wizard' );
	// Othell Rogue
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 105, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Othell Rogue' ,  'name_short' =>  'Othell Rogue' );
	// Iss Enchanter
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 106, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Iss Enchanter' ,  'name_short' =>  'Iss Enchanter' );
	// Sigel Knight
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 107, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Sigel Knight' ,  'name_short' =>  'Sigel Knight' );
	// Eolh Healer
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 108, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Eolh Healer' ,  'name_short' =>  'Eolh Healer' );
	// Wynn Summoner
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 109, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Wynn Summoner' ,  'name_short' =>  'Wynn Summoner' );

	//Races
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 0, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Unknown' ,  'name_short' =>  'Unknown' );
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 1, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Human' ,  'name_short' =>  'Human' );
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 2, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Elf' , 'name_short' =>  'Elf' );
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 3, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Dark Elf' ,  'name_short' =>  'Dark Elf' );
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 4, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Dwarf' ,  'name_short' =>  'Dwarf' );
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 5, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Orc' , 'name_short' =>  'Orc' );
	$sql_ary[] = array( 'game_id' => 'lineage2','attribute_id' => 6, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Kamael' ,  'name_short' =>  'Kamael' );
	
	$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
	unset ( $sql_ary );
	
}



?>